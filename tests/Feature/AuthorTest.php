<?php

namespace Tests\Feature;

use App\Author;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthorTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    function testit_has_an_id()
    {
        $unit = factory(\App\Author::class)->create();
        $this->assertGreaterThan(0, $unit->id);
    }

function testIt_has_a_name()
    {
        $author = factory(\App\Author::class)->create(['author' => 'authorname']);
        $this->assertEquals('authorname', $author->author);
    }
}
