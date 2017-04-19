<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LocationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLocationCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'Admin@biep.dev')
                    ->type('password', 'Admin123!')
                    ->press('Login')
                    ->visit('/location')
                    ->visit('/location/create')
                    ->type('name', 'De Stroming')
                    ->press('Opslaan')
                    ->assertSee('is toegevoegd.');
        });
    }
    public function testLocationEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'Admin@biep.dev')
                    ->type('password', 'Admin123!')
                    ->press('Login')
                    ->visit('/location')
                    ->press('De Stroming')
                    ->press('Bewerken')
                    ->type('name', 'De Stroming geedit')
                    ->press('Opslaan')
                    ->assertSee('is bijgewerkt.');
        });
    }

}
