<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserModelTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_the_avatar_url_based_on_email_address()
    {
        $user = factory(User::class)->create(['email' => 'john@example.com']);

        $this->assertEquals("https://www.gravatar.com/avatar/d4c74594d841139328695756648b6bd6?d=mp", $user->avatar);
    }
}
