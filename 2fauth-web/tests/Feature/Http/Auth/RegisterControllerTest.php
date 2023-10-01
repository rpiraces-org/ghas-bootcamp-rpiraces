<?php

namespace Tests\Feature\Http\Auth;

use App\Facades\Settings;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\FeatureTestCase;

/**
 * RegisterControllerTest test class
 */
#[CoversClass(RegisterController::class)]
#[CoversClass(UserStoreRequest::class)]
class RegisterControllerTest extends FeatureTestCase
{
    private const USERNAME = 'john doe';

    private const EMAIL = 'johndoe@example.org';

    private const PASSWORD = 'password';

    /**
     * @test
     */
    public function setUp() : void
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function test_register_returns_success()
    {
        DB::table('users')->delete();

        $response = $this->json('POST', '/user', [
            'name'                  => self::USERNAME,
            'email'                 => self::EMAIL,
            'password'              => self::PASSWORD,
            'password_confirmation' => self::PASSWORD,
        ])
            ->assertCreated()
            ->assertJsonStructure([
                'message',
                'name',
            ])
            ->assertJsonFragment([
                'name' => self::USERNAME,
            ]);

        $this->assertDatabaseHas('users', [
            'name'  => self::USERNAME,
            'email' => self::EMAIL,
        ]);
    }

    /**
     * @test
     */
    public function test_register_with_uppercased_email_returns_success()
    {
        DB::table('users')->delete();

        $response = $this->json('POST', '/user', [
            'name'                  => self::USERNAME,
            'email'                 => strtoupper(self::EMAIL),
            'password'              => self::PASSWORD,
            'password_confirmation' => self::PASSWORD,
        ])
            ->assertCreated()
            ->assertJsonStructure([
                'message',
                'name',
            ])
            ->assertJsonFragment([
                'name' => self::USERNAME,
            ]);

        $this->assertDatabaseHas('users', [
            'name'  => self::USERNAME,
            'email' => self::EMAIL,
        ]);
    }

    /**
     * @test
     */
    public function test_register_with_invalid_data_returns_validation_error()
    {
        $response = $this->json('POST', '/user', [
            'name'                  => null,
            'email'                 => self::EMAIL,
            'password'              => self::PASSWORD,
            'password_confirmation' => self::PASSWORD,
        ])
            ->assertStatus(422);
    }

    /**
     * @test
     */
    public function test_register_first_user_only_as_admin()
    {
        $this->assertDatabaseCount('users', 0);

        $response = $this->json('POST', '/user', [
            'name'                  => self::USERNAME,
            'email'                 => self::EMAIL,
            'password'              => self::PASSWORD,
            'password_confirmation' => self::PASSWORD,
        ]);

        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users', [
            'name'     => self::USERNAME,
            'email'    => self::EMAIL,
            'is_admin' => true,
        ]);

        $response = $this->json('POST', '/user', [
            'name'                  => 'jane',
            'email'                 => 'jane@example.org',
            'password'              => self::PASSWORD,
            'password_confirmation' => self::PASSWORD,
        ]);

        $this->assertEquals(1, User::admins()->count());
    }

    /**
     * @test
     */
    public function test_register_is_forbidden_when_registration_is_disabled()
    {
        Settings::set('disableRegistration', true);

        $this->json('POST', '/user', [
            'name'                  => self::USERNAME,
            'email'                 => self::EMAIL,
            'password'              => self::PASSWORD,
            'password_confirmation' => self::PASSWORD,
        ])
        ->assertStatus(403);
    }
}
