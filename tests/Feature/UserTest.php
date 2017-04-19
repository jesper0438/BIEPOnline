<?php

namespace Tests\Feature;

use Tests\TestCase;



class UserTest extends TestCase
{
    /** @test */
    public function it_has_an_id()
    {
        $uut = factory(\App\User::class)->create();
        $this->assertGreaterThan(0, $uut->id);
    }
}
