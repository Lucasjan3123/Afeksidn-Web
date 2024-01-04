<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        
        // Buat user baru
        $user = User::create([
            'nama' => 'testings',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Kirim permintaan POST ke endpoint login
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        // Periksa apakah pengguna berhasil masuk
        $response->assertRedirect(RouteServiceProvider::HOME);
        $this->assertAuthenticatedAs($user);
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $response = $this->post('/login', [
            'email' => 'test@example,com',
            'password' => ' Wrongpassword1',
        ]);
        //cek ditolak
        $response->assertSessionHasErrors();
        $this->assertGuest();
    }
}
