<?php

namespace Tests\Api\v1\Requests;

use App\Api\v1\Requests\TwoFAccountUriRequest;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

/**
 * TwoFAccountUriRequestTest test class
 */
#[CoversClass(TwoFAccountUriRequest::class)]
class TwoFAccountUriRequestTest extends TestCase
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

        $request = new TwoFAccountUriRequest();

        $this->assertTrue($request->authorize());
    }

    /**
     * @test
     */
    #[DataProvider('provideValidData')]
    public function test_valid_data(array $data) : void
    {
        $request   = new TwoFAccountUriRequest();
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
                'uri' => 'otpauth://totp/test@test.com?secret=A4GRFHZVRBGY7UIW&issuer=test',
            ]],
            [[
                'uri' => 'otpauth://hotp/test@test.com?secret=A4GRFHZVRBGY7UIW&issuer=test',
            ]],
            [[
                'uri'        => 'otpauth://totp/test@test.com?secret=A4GRFHZVRBGY7UIW&issuer=test',
                'custom_otp' => 'steamtotp',
            ]],
        ];
    }

    /**
     * @test
     */
    #[DataProvider('provideInvalidData')]
    public function test_invalid_data(array $data) : void
    {
        $request   = new TwoFAccountUriRequest();
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
                'uri' => null, // required
            ]],
            [[
                'uri' => '', // required
            ]],
            [[
                'uri' => true, // string
            ]],
            [[
                'uri' => 8, // string
            ]],
            [[
                'uri' => 'otpXauth://totp/test@test.com?secret=A4GRFHZVRBGY7UIW&issuer=test', // regex
            ]],
            [[
                'uri'        => 'otpauth://totp/test@test.com?secret=A4GRFHZVRBGY7UIW&issuer=test',
                'custom_otp' => 'notSteam', // not in
            ]],
            [[
                'uri'        => 'otpauth://totp/test@test.com?secret=A4GRFHZVRBGY7UIW&issuer=test',
                'custom_otp' => 0, // string
            ]],
            [[
                'uri'        => 'otpauth://totp/test@test.com?secret=A4GRFHZVRBGY7UIW&issuer=test',
                'custom_otp' => true, // string
            ]],
        ];
    }
}
