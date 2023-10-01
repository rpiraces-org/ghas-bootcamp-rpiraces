<?php

namespace Tests\Feature\Http\Requests;

use App\Http\Requests\UserPatchPwdRequest;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

/**
 * UserPatchPwdRequestTest test class
 */
#[CoversClass(UserPatchPwdRequest::class)]
class UserPatchPwdRequestTest extends TestCase
{
    use WithoutMiddleware;

    /**
     * @test
     */
    public function test_user_is_authorized()
    {
        Auth::shouldReceive('check')
        ->once()
        ->andReturn(true);

        $request = new UserPatchPwdRequest();

        $this->assertTrue($request->authorize());
    }

    /**
     * @test
     */
    #[DataProvider('provideValidData')]
    public function test_valid_data(array $data) : void
    {
        $request   = new UserPatchPwdRequest();
        $validator = Validator::make($data, $request->rules());

        $this->assertFalse($validator->fails());
    }

    /**
     * Provide Valid data for validation test
     */
    public static function provideValidData() : array
    {
        return [
            [[
                'currentPassword'       => 'newPassword',
                'password'              => 'newPassword',
                'password_confirmation' => 'newPassword',
            ]],
        ];
    }

    /**
     * @test
     */
    #[DataProvider('provideInvalidData')]
    public function test_invalid_data(array $data) : void
    {
        $request   = new UserPatchPwdRequest();
        $validator = Validator::make($data, $request->rules());

        $this->assertTrue($validator->fails());
    }

    /**
     * Provide invalid data for validation test
     */
    public static function provideInvalidData() : array
    {
        return [
            [[
                'currentPassword'       => '', // required
                'password'              => 'newPassword',
                'password_confirmation' => 'newPassword',
            ]],
            [[
                'currentPassword'       => 'currentPassword',
                'password'              => '', // required
                'password_confirmation' => 'newPassword',
            ]],
            [[
                'currentPassword'       => 'newPassword',
                'password'              => 'anotherPassword', // confirmed
                'password_confirmation' => 'newPassword',
            ]],
            [[
                'currentPassword'       => 'pwd',
                'password'              => 'pwd', // min:8
                'password_confirmation' => 'newPassword',
            ]],
            [[
                'currentPassword'       => 'pwd',
                'password'              => true, // string
                'password_confirmation' => 'newPassword',
            ]],
            [[
                'currentPassword'       => 'pwd',
                'password'              => 10, // string
                'password_confirmation' => 'newPassword',
            ]],
        ];
    }
}
