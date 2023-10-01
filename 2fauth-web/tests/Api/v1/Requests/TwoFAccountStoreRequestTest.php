<?php

namespace Tests\Api\v1\Requests;

use App\Api\v1\Requests\TwoFAccountStoreRequest;
use App\Rules\IsBase32Encoded;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

/**
 * TwoFAccountStoreRequestTest test class
 */
#[CoversClass(TwoFAccountStoreRequest::class)]
#[CoversClass(IsBase32Encoded::class)]
class TwoFAccountStoreRequestTest extends TestCase
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

        $request = new TwoFAccountStoreRequest();

        $this->assertTrue($request->authorize());
    }

    /**
     * @test
     */
    #[DataProvider('provideValidData')]
    public function test_valid_data(array $data) : void
    {
        $request   = new TwoFAccountStoreRequest();
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
                'service'   => 'MyService',
                'account'   => 'MyAccount',
                'icon'      => 'icon.png',
                'otp_type'  => 'totp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => 6,
                'algorithm' => 'sha1',
                'period'    => 30,
            ]],
            [[
                'service'   => 'MyService',
                'account'   => 'MyAccount',
                'icon'      => 'icon.png',
                'otp_type'  => 'hotp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => 8,
                'algorithm' => 'sha1',
                'counter'   => 10,
            ]],
            [[
                'service'   => null,
                'account'   => 'MyAccount',
                'icon'      => null,
                'otp_type'  => 'hotp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => null,
                'algorithm' => null,
                'counter'   => null,
            ]],
            [[
                'account'  => 'MyAccount',
                'otp_type' => 'totp',
            ]],
            [[
                'account'   => 'MyAccount',
                'otp_type'  => 'totp',
                'algorithm' => 'sha256',
            ]],
            [[
                'account'   => 'MyAccount',
                'otp_type'  => 'totp',
                'algorithm' => 'sha512',
            ]],
            [[
                'account'   => 'MyAccount',
                'otp_type'  => 'totp',
                'algorithm' => 'md5',
            ]],
            [[
                'account'   => 'MyAccount',
                'otp_type'  => 'totp',
                'algorithm' => 'md5',
                'secret'    => 'eee',
            ]],
        ];
    }

    /**
     * @test
     */
    #[DataProvider('provideInvalidData')]
    public function test_invalid_data(array $data) : void
    {
        $request   = new TwoFAccountStoreRequest();
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
                'account'  => 'My:Account',
                'otp_type' => 'totp',
            ]],
            [[
                'account'  => 'MyAccount',
                'otp_type' => 'Xotp',
            ]],
            [[
                'account'  => 'MyAccount',
                'otp_type' => null,
            ]],
            [[
                'account'  => 'MyAccount',
                'otp_type' => 'totp',
                'service'  => 'My:Service',
            ]],
            [[
                'account'  => 'MyAccount',
                'otp_type' => 'totp',
                'secret'   => true,
            ]],
            [[
                'account'  => 'MyAccount',
                'otp_type' => 'totp',
                'secret'   => 123456,
            ]],
            [[
                'account'  => 'MyAccount',
                'otp_type' => 'totp',
                'secret'   => '1.0',
            ]],
            [[
                'account'  => 'MyAccount',
                'otp_type' => 'totp',
                'digits'   => 4,
            ]],
            [[
                'account'  => 'MyAccount',
                'otp_type' => 'totp',
                'digits'   => 11,
            ]],
            [[
                'account'  => 'MyAccount',
                'otp_type' => 'totp',
                'period'   => 0,
            ]],
            [[
                'account'  => 'MyAccount',
                'otp_type' => 'hotp',
                'counter'  => -1,
            ]],
            [[
                'account'   => 'MyAccount',
                'otp_type'  => 'totp',
                'algorithm' => 'shaX',
            ]],
        ];
    }
}
