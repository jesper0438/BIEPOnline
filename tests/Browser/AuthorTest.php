<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthorTest extends DuskTestCase
{
    /**
     * Open author page, create a new author
     *
     * @return void
     */
    public function testAuthorCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'admin@bieponline.local')
                    ->type('password', 'Admin123!')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->click('button[type="button"]')
                    ->clickLink('Administratie')
                    ->clickLink('Auteurs')
                    ->assertPathIs('/author')
                    ->press('.btn-success')
                    ->type('author', 'George Orwell')
                    ->press('Opslaan')
                    ->assertSee('is toegevoegd.');
        });
    }

    /**
     * Open author page, edit an existing author
     *
     * @return void
     */
    public function testAuthorEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->assertPathIs('/author')
                    ->press('.table-text')
                    ->clickLink('Bewerken')
                    ->type('author', 'George J.J. Orwell')
                    ->press('Opslaan')
                    ->assertSee('is bijgewerkt.');
        });
    }
}
