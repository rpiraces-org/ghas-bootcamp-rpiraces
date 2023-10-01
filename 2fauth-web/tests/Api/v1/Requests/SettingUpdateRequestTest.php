<?php

namespace Tests\Api\v1\Requests;

use App\Api\v1\Requests\SettingStoreRequest;
use App\Api\v1\Requests\SettingUpdateRequest;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

/**
 * SettingUpdateRequestTest test class
 */
#[CoversClass(SettingStoreRequest::class)]
class SettingUpdateRequestTest extends TestCase
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

        $request = new SettingUpdateRequest();

        $this->assertTrue($request->authorize());
    }

    /**
     * @test
     */
    #[DataProvider('provideValidData')]
    public function test_valid_data(array $data) : void
    {
        $request   = new SettingUpdateRequest();
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
                'value' => true,
            ]],
            [[
                'value' => 'MyValue',
            ]],
            [[
                'value' => 10,
            ]],
        ];
    }

    /**
     * @test
     */
    #[DataProvider('provideInvalidData')]
    public function test_invalid_data(array $data) : void
    {
        $request   = new SettingUpdateRequest();
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
                'value' => '', // required
            ]],
            [[
                'value' => null, // required
            ]],
        ];
    }
}
