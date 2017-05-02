<?php

namespace Tests\Feature;

use App\Status;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StatusTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    function it_has_an_id()
    {
        $status = factory(\App\Status::class)->create();
        $this->assertEquals(0, $status->id);
    }

    /** @test */
    function It_has_a_name()
    {
        $status = factory(\App\Status::class)->create(['status' => 'statusnaam']);
        $this->assertEquals('statusnaam', $status->status);
    }

    /** @test */
    function it_requires_a_name()
    {
        $this->expectException('Illuminate\Database\QueryException');
        $status = factory(\App\Status::class)->create(['status' => null]);
    }
}

