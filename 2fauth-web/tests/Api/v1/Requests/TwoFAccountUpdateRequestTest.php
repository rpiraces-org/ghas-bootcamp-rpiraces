<?php

namespace Tests\Api\v1\Requests;

use App\Api\v1\Requests\TwoFAccountUpdateRequest;
use App\Rules\IsBase32Encoded;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

/**
 * TwoFAccountUpdateRequestTest test class
 */
#[CoversClass(TwoFAccountUpdateRequest::class)]
#[CoversClass(IsBase32Encoded::class)]
class TwoFAccountUpdateRequestTest extends TestCase
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

        $request = new TwoFAccountUpdateRequest();

        $this->assertTrue($request->authorize());
    }

    /**
     * @test
     */
    #[DataProvider('provideValidData')]
    public function test_valid_data(array $data) : void
    {
        $request   = new TwoFAccountUpdateRequest();
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
                'secret'    => 'eeee',
                'digits'    => 10,
                'algorithm' => 'sha1',
                'period'    => null,
                'counter'   => 15,
            ]],
        ];
    }

    /**
     * @test
     */
    #[DataProvider('provideInvalidData')]
    public function test_invalid_data(array $data) : void
    {
        $request   = new TwoFAccountUpdateRequest();
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
                'service'   => null,
                'account'   => 'My:Account',
                'icon'      => null,
                'otp_type'  => 'hotp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => 6,
                'algorithm' => 'sha1',
                'period'    => null,
                'counter'   => 15,
            ]],
            [[
                'service'   => 'My:Service',
                'account'   => 'MyAccount',
                'icon'      => null,
                'otp_type'  => 'hotp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => 6,
                'algorithm' => 'sha1',
                'period'    => null,
                'counter'   => 15,
            ]],
            [[
                'service'   => null,
                'account'   => 'My:Account',
                'icon'      => null,
                'otp_type'  => 'Xotp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => 6,
                'algorithm' => 'sha1',
                'period'    => null,
                'counter'   => 15,
            ]],
            [[
                'service'   => null,
                'account'   => 'MyAccount',
                'icon'      => null,
                'otp_type'  => 'hotp',
                'secret'    => 1000,
                'digits'    => 6,
                'algorithm' => 'sha1',
                'period'    => null,
                'counter'   => 15,
            ]],
            [[
                'service'   => 'MyService',
                'account'   => 'MyAccount',
                'icon'      => null,
                'otp_type'  => 'totp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => 4,
                'algorithm' => 'sha1',
                'period'    => null,
                'counter'   => 15,
            ]],
            [[
                'service'   => 'MyService',
                'account'   => 'MyAccount',
                'icon'      => null,
                'otp_type'  => 'totp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => 11,
                'algorithm' => 'sha1',
                'period'    => null,
                'counter'   => 15,
            ]],
            [[
                'service'   => 'MyService',
                'account'   => 'MyAccount',
                'icon'      => null,
                'otp_type'  => 'totp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => 6,
                'algorithm' => 'Xsha1',
                'period'    => null,
                'counter'   => 15,
            ]],
            [[
                'service'   => 'MyService',
                'account'   => 'MyAccount',
                'icon'      => null,
                'otp_type'  => 'totp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => 6,
                'algorithm' => 'sha1',
                'period'    => 0,
                'counter'   => 15,
            ]],
            [[
                'service'   => 'MyService',
                'account'   => 'MyAccount',
                'icon'      => null,
                'otp_type'  => 'totp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => 4,
                'algorithm' => 'sha1',
                'period'    => null,
                'counter'   => -1,
            ]],
            [[
                'service'   => 'MyService',
                'account'   => 'MyAccount',
                'icon'      => null,
                'otp_type'  => 'totp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => null,
                'algorithm' => 'sha1',
                'period'    => null,
                'counter'   => 15,
            ]],
            [[
                'service'   => 'MyService',
                'account'   => 'MyAccount',
                'icon'      => null,
                'otp_type'  => 'totp',
                'secret'    => 'A4GRFHZVRBGY7UIW',
                'digits'    => 6,
                'algorithm' => null,
                'period'    => null,
                'counter'   => 15,
            ]],
        ];
    }
}
