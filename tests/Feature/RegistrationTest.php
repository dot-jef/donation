<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register_with_email_and_is_logged_in()
    {
        $response = $this->post('/user', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => null,
            'address' => '123 Main St',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'role' => 'donor'
        ]);

        $response->assertRedirect('/donor/dashboard');
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', ['email' => 'john@example.com']);
    }

    public function test_user_can_register_with_phone_only()
    {
        $response = $this->post('/user', [
            'name' => 'Jane Doe',
            'email' => null,
            'phone' => '09171234567',
            'address' => '123 Main St',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'role' => 'beneficiary'
        ]);

        $response->assertRedirect('/beneficiary/dashboard');
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', ['phone' => '09171234567']);
    }
}
