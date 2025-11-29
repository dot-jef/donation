<?php
// Simple CSS dedupe analysis using PHP - conservative algorithm
// - Find duplicates within files
// - Find duplicates across files and detect where it's safe to remove earlier occurrences

$root = realpath(__DIR__ . '/../');
$cssGlobs = [$root . '/public/css', $root . '/resources/css'];
$viewsDir = $root . '/resources/views';

function readCssFiles($globs) {
    $files = [];
    foreach ($globs as $base) {
        if (file_exists($base)) {
            $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($base));
            foreach ($it as $f) {
                if ($f->isFile() && preg_match('/\.css$/', $f->getFilename())) {
                    $files[] = $f->getRealPath();
                }
            }
        }
    }
    return $files;
}

function parseCssFile($path) {
    $s = file_get_contents($path);
    // basic rule parse
    preg_match_all('/(?s)\s*([^\{]+)\{([^}]*)\}/', $s, $matches, PREG_SET_ORDER);
    $rules = [];
    $p = 0;
    foreach ($matches as $m) {
        $selector = trim(preg_replace('/\s+/', ' ', trim($m[1])));
        $decls = trim($m[2]);
        $norm = normalizeDecls($decls);
        $rules[] = ['selector' => $selector, 'decls' => $decls, 'norm' => $norm, 'index' => $p];
        $p++;
    }
    return $rules;
}

function normalizeDecls($decls) {
    $text = preg_replace('/\/\*.*?\*\//s', '', $decls);
    $parts = array_filter(array_map('trim', explode(';', $text)), 'strlen');
    $norms = [];
    foreach ($parts as $p) {
        if (strpos($p, ':') !== false) {
            $parts2 = explode(':', $p, 2);
            $norms[] = trim($parts2[0]) . ':' . trim($parts2[1]);
        } else {
            $norms[] = $p;
        }
    }
    sort($norms);
    return implode(';', $norms);
}

function listViewsAndIncludes($viewsDir) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($viewsDir));
        global $root;
        $mapping = [];
    foreach ($rii as $f) {
        if ($f->isFile() && preg_match('/\.blade\.php$/', $f->getFilename())) {
            $path = $f->getRealPath();
            $s = file_get_contents($path);
            $includes = [];
            if (preg_match('/@extends\((?:\'|\")layouts\.([a-zA-Z0-9_\-]+)(?:\'|\")\)/', $s, $m)) {
                $layout = $viewsDir . '/layouts/' . $m[1] . '.blade.php';
                if (file_exists($layout)) {
                    $ls = file_get_contents($layout);
                    preg_match_all('/<link[^>]*href=.*asset\((?:\'|\")css\/([^\'\"]+)(?:\'|\")\)[^>]*>/', $ls, $mm);
                    foreach ($mm[1] as $i) {
                        $includes[] = $i;
                    }
                }
            }
            preg_match_all('/<link[^>]*href=.*asset\((?:\'|\")css\/([^\'\"]+)(?:\'|\")\)[^>]*>/', $s, $me);
            foreach ($me[1] as $i2) $includes[] = $i2;
            $mapping[substr($path, strlen($root)+1)] = $includes;
        }
    }
    return $mapping;
}

$cssFiles = readCssFiles($cssGlobs);
$viewsIncludes = listViewsAndIncludes($viewsDir);

$rule_map = [];
$file_rules = [];

foreach ($cssFiles as $f) {
    $rules = parseCssFile($f);
    $rel = substr($f, strlen($root) + 1);
    $file_rules[$rel] = $rules;
    foreach ($rules as $r) {
        $key = $r['selector'] . '||' . $r['norm'];
        if (!isset($rule_map[$key])) $rule_map[$key] = [];
        $rule_map[$key][] = $rel;
    }
}

$dup_keys = array_filter(array_keys($rule_map), function($k) use ($rule_map) { return count(array_unique($rule_map[$k])) > 1; });

echo "Found " . count($dup_keys) . " duplicated rule keys\n";

// compute safe removals
$safe = [];
foreach ($dup_keys as $key) {
    $files = array_values(array_unique($rule_map[$key]));
    $last_files = [];
    foreach ($viewsIncludes as $view => $includes) {
        $included = array_values(array_intersect($files, $includes));
        if (count($included) === 0) continue;
        $last = end($included);
        if ($last) $last_files[$last] = true;
    }
    if (count($last_files) === 1) {
        $lastf = array_keys($last_files)[0];
        $remove = array_filter($files, function($f) use ($lastf) { return $f !== $lastf; });
        $safe[$key] = ['keep' => $lastf, 'remove_from' => array_values($remove)];
    }
}

echo "Safe to remove duplicates: " . count($safe) . "\n";
foreach (array_slice($safe,0,200) as $key => $v) {
    list($sel, $norm) = explode('||', $key, 2);
    echo "\nSelector: $sel\nKeep in: {$v['keep']}\nRemove from: " . implode(', ', $v['remove_from']) . "\n";
}

// Print all duplicate keys and the files where they appear
echo "\nAll duplicated rules and files:\n";
foreach ($dup_keys as $k) {
    list($sel, $norm) = explode('||', $k, 2);
    $files = array_values(array_unique($rule_map[$k]));
    echo "\nSelector: $sel\nFiles: " . implode(', ', $files) . "\n";
}

// intra-file duplicates
$intra = [];
foreach ($file_rules as $rel => $rules) {
    $seen = [];
    foreach ($rules as $r) {
        $key = $r['selector'] . '||' . $r['norm'];
        if (!isset($seen[$key])) $seen[$key] = 0;
        $seen[$key]++;
    }
    $dups = array_filter(array_keys($seen), function($k) use ($seen){ return $seen[$k] > 1; });
    if (count($dups)) $intra[$rel] = $dups;
}

echo "\nFiles with intra-file duplicates: " . count($intra) . "\n";
foreach ($intra as $rel => $arr) {
    echo "\n$rel => " . count($arr) . " duplicates\n";
}
