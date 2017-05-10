<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LocationTest extends DuskTestCase
{
    /**
     * Open location page, create a new location
     *
     * @return void
     */
    public function testLocationCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'admin@bieponline.local')
                    ->type('password', 'Admin123!')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->click('button[type="button"]')
                    ->clickLink('Locaties')
                    ->assertPathIs('/location')
                    ->press('.btn-success')
                    ->type('name', 'HZ University')
                    ->press('Opslaan')
                    ->assertSee('is toegevoegd.');
        });
    }

    /**
     * Open location page, edit an existing location
     *
     * @return void
     */
    public function testLocationEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->assertPathIs('/location')
                    ->press('.table-text')
                    ->clickLink('Bewerken')
                    ->type('name', 'HZ')
                    ->press('Opslaan')
                    ->assertSee('is bijgewerkt.');
        });
    }
}
