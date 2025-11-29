<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class AuthorizationTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_is_redirected_from_admin_dashboard()
    {
        $response = $this->get('/admin/dashboard');
        $response->assertRedirect('/login');
    }

    public function test_donor_cannot_access_admin_dashboard()
    {
        $user = User::factory()->create(['role' => 'donor']);
        $this->actingAs($user);
        $response = $this->get('/admin/dashboard');
        $response->assertRedirect('/donor/dashboard');
    }

    public function test_admin_can_access_admin_dashboard()
    {
        $user = User::factory()->create(['role' => 'admin']);
        $this->actingAs($user);
        $response = $this->get('/admin/dashboard');
        $response->assertStatus(200);
    }

    public function test_staff_cannot_access_beneficiary_profile()
    {
        $user = User::factory()->create(['role' => 'staff']);
        $this->actingAs($user);
        $response = $this->get('/beneficiary/profile');
        $response->assertRedirect('/staff/dashboard');
    }

    public function test_beneficiary_can_access_beneficiary_profile()
    {
        $user = User::factory()->create(['role' => 'beneficiary']);
        $this->actingAs($user);
        $response = $this->get('/beneficiary/profile');
        $response->assertStatus(200);
    }
}
