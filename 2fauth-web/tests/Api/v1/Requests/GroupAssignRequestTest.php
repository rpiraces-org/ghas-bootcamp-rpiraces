<?php

namespace Tests\Api\v1\Requests;

use App\Api\v1\Requests\GroupAssignRequest;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

/**
 * GroupAssignRequestTest test class
 */
#[CoversClass(GroupAssignRequest::class)]
class GroupAssignRequestTest extends TestCase
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

        $request = new GroupAssignRequest();

        $this->assertTrue($request->authorize());
    }

    /**
     * @test
     */
    #[DataProvider('provideValidData')]
    public function test_valid_data(array $data) : void
    {
        $request   = new GroupAssignRequest();
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
                'ids' => [
                    1, 2, 3,
                ],
            ]],
        ];
    }

    /**
     * @test
     */
    #[DataProvider('provideInvalidData')]
    public function test_invalid_data(array $data) : void
    {
        $request   = new GroupAssignRequest();
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
                'ids' => null, // required
            ]],
            [[
                'ids' => '1,2,3', // array
            ]],
            [[
                'ids' => [
                    'a', 'b', 'c', // array of integers
                ],
            ]],
            [[
                'ids' => [
                    true, false, // array of integers
                ],
            ]],
        ];
    }
}
