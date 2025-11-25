<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'phone' => '09123456789',
            'role' => 'admin',
            'address' => '123 Admin St',
            'password' => Hash::make('password123'),
        ]);
    }
}
