<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class PasswordUpdateTest extends TestCase
{
    use RefreshDatabase;

    public function test_password_can_be_updated(): void
    {
         $user = User::create([
            'nama' => 'Alana R',
            'email' => 'alana@gmail.com',
            'email_verified_at' => null,
            'password' => 'Password123',
            'password_confirmation' => 'Password123',
        ]);

        $response = $this
            ->actingAs($user)
            ->from('/profile')
            ->put('/password', [
                'current_password' => 'Password123',
                'password' => 'newPassword123',
                'password_confirmation' => 'newPassword123',
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $this->assertTrue(Hash::check('newPassword123', $user->refresh()->password));
    }

    public function test_correct_password_must_be_provided_to_update_password(): void
    {
        $user = User::create([
            'nama' => 'Alana R',
            'email' => 'alana@gmail.com',
            'email_verified_at' => null,
            'password' => 'Password123',
            'password_confirmation' => 'Password123',
        ]);

        $response = $this
            ->actingAs($user)
            ->from('/profile')
            ->put('/password', [
                'current_password' => 'Password12',
                'password' => 'newPassword1',
                'password_confirmation' => 'newPassword1',
            ]);

        $response
            ->assertSessionHasErrorsIn('updatePassword', 'current_password')
            ->assertRedirect('/profile');
    }
}
