<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthorTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'Admin@biep.dev')
                    ->type('password', 'Admin123!')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->visit('/author')
                    ->press('.btn-primary')
                    ->type('author', 'Jasdasdosssssery Zegers')
                    ->press('.btn-primary')
                    ->assertSee('De author is al in gebruik.');
                    


        });
    }
}