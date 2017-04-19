<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testUserCreate()
    {
        $this->assertTrue(true);
    }
}
