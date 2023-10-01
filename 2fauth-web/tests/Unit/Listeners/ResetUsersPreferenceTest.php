<?php

namespace Tests\Unit\Listeners;

use App\Events\GroupDeleted;
use App\Listeners\ResetUsersPreference;
use Illuminate\Support\Facades\Event;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\TestCase;

/**
 * ResetUsersPreferenceTest test class
 */
#[CoversClass(ResetUsersPreference::class)]
class ResetUsersPreferenceTest extends TestCase
{
    /**
     * @test
     */
    public function test_ResetUsersPreference_listen_to_GroupDeleted_event()
    {
        Event::fake();

        Event::assertListening(
            GroupDeleted::class,
            ResetUsersPreference::class
        );
    }
}
