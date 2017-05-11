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
                    ->type('email', 'admin@bieponline.local')
                    ->type('password', 'Admin123!')
                    ->press('Login')
                    ->visit('/location')
                    ->visit('/location/create')
                    ->type('name', 'De Stroming')
                    ->press('Opslaan')
                    ->assertSee('De Stroming is toegevoegd.');
        });
    }
    public function testLocationEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/location')
                    ->press('.table-text', 'De Stroming')
                    ->press('.btn-primary', 'Bewerken')
                    ->type('name', 'De Stroming geedit')
                    ->press('Opslaan')
                    ->assertSee('De Stroming geedit is bijgewerkt.');
        });
    }
    public function testLocationDelete()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/location')
                ->press('.table-text', 'De Stroming geedit')
                ->press('Verwijderen')
                ->acceptDialog('Weet u zeker dat u deze locatie wilt verwijderen?')
                ->assertSee('De Stroming geedit is verwijderd.');
        });
    }
}
