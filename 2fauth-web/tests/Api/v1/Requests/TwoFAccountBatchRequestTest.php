<?php

namespace Tests\Api\v1\Requests;

use App\Api\v1\Requests\TwoFAccountBatchRequest;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

/**
 * TwoFAccountBatchRequestTest test class
 */
#[CoversClass(TwoFAccountBatchRequest::class)]
class TwoFAccountBatchRequestTest extends TestCase
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

        $request = new TwoFAccountBatchRequest();

        $this->assertTrue($request->authorize());
    }

    /**
     * @test
     */
    #[DataProvider('provideValidData')]
    public function test_valid_data(array $data) : void
    {
        $request   = new TwoFAccountBatchRequest();
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
                'ids' => '1',
            ]],
            [[
                'ids' => '1,2,5',
            ]],
        ];
    }

    /**
     * @test
     */
    #[DataProvider('provideInvalidData')]
    public function test_invalid_data(array $data) : void
    {
        $request   = new TwoFAccountBatchRequest();
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
                'ids' => '', // required
            ]],
            [[
                'ids' => null, // required
            ]],
            [[
                'ids' => true, // string
            ]],
            [[
                'ids' => 10, // string
            ]],
            [[
                'ids' => 'notaCommaSeparatedList', // regex
            ]],
            [[
                'ids' => 'a,b', // regex
            ]],
            [[
                'ids' => 'a,1', // regex
            ]],
            [[
                'ids' => ',1,2', // regex
            ]],
            [[
                'ids' => '1,,2', // regex
            ]],
            [[
                'ids' => '1,2,', // regex
            ]],
            [[
                'ids' => ',1,2,', // regex
            ]],
            [[
                'ids' => '1;2', // regex
            ]],
        ];
    }
}
