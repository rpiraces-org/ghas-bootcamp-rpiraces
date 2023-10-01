<?php

namespace Tests\Feature\Http\Auth;

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\FeatureTestCase;

/**
 * ResetPasswordControllerTest test class
 */
#[CoversClass(ResetPasswordController::class)]
#[CoversClass(User::class)]
class ResetPasswordControllerTest extends FeatureTestCase
{
    /**
     * @var \App\Models\User|\Illuminate\Contracts\Auth\Authenticatable
     */
    protected $user;

    /**
     * @test
     */
    public function test_submit_reset_password_without_input_returns_validation_error()
    {
        $response = $this->json('POST', '/user/password/reset', [
            'email'                 => '',
            'password'              => '',
            'password_confirmation' => '',
            'token'                 => '',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email', 'password', 'token']);
    }

    /**
     * @test
     */
    public function test_submit_reset_password_with_invalid_data_returns_validation_error()
    {
        $response = $this->json('POST', '/user/password/reset', [
            'email'                 => 'qsdqsdqsd',
            'password'              => 'foofoofoo',
            'password_confirmation' => 'barbarbar',
            'token'                 => 'token',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email', 'password']);
    }

    /**
     * @test
     */
    public function test_submit_reset_password_with_too_short_pwd_returns_validation_error()
    {
        $response = $this->json('POST', '/user/password/reset', [
            'email'                 => 'foo@bar.com',
            'password'              => 'foo',
            'password_confirmation' => 'foo',
            'token'                 => 'token',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['password']);
    }

    /**
     * @test
     */
    public function test_submit_reset_password_returns_success()
    {
        Notification::fake();

        $this->user = User::factory()->create();
        $token      = Password::broker()->createToken($this->user);

        $response = $this->json('POST', '/user/password/reset', [
            'email'                 => $this->user->email,
            'password'              => 'newpassword',
            'password_confirmation' => 'newpassword',
            'token'                 => $token,
        ]);

        $this->user->refresh();

        $response->assertOk();
        $this->assertTrue(Hash::check('newpassword', $this->user->password));
    }
}
