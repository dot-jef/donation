<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_login_with_email()
    {
        $password = 'password123';
        $user = User::factory()->create(['email' => 'login1@example.com', 'password' => bcrypt($password)]);

        $response = $this->post('/login', [
            'login' => 'login1@example.com',
            'password' => $password
        ]);

        $response->assertRedirect('/donor/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    public function test_user_can_login_with_phone()
    {
        $password = 'password123';
        $user = User::factory()->create(['phone' => '09171234567', 'password' => bcrypt($password)]);

        $response = $this->post('/login', [
            'login' => '09171234567',
            'password' => $password
        ]);

        $response->assertRedirect('/donor/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    public function test_admin_can_login_and_redirects_to_admin_dashboard()
    {
        $password = 'password123';
        $user = User::factory()->create(['email' => 'admin1@example.com', 'role' => 'admin', 'password' => bcrypt($password)]);

        $response = $this->post('/login', [
            'login' => 'admin1@example.com',
            'password' => $password
        ]);

        $response->assertRedirect('/admin/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    public function test_staff_can_login_and_redirects_to_staff_dashboard()
    {
        $password = 'password123';
        $user = User::factory()->create(['email' => 'staff1@example.com', 'role' => 'staff', 'password' => bcrypt($password)]);

        $response = $this->post('/login', [
            'login' => 'staff1@example.com',
            'password' => $password
        ]);

        $response->assertRedirect('/staff/dashboard');
        $this->assertAuthenticatedAs($user);
    }
}
