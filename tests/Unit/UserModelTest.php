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
        $user = factory(User::class)->create();
        $hash = md5(strtolower(trim($user->email)));

        $this->assertEquals("https://www.gravatar.com/avatar/{$hash}?d=mp", $user->avatar);
    }
}
