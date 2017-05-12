<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RoleTest extends DuskTestCase
{
    /**
     * Open role page, create a new role
     *
     * @return void
     */
    public function testRoleCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'admin@bieponline.local')
                    ->type('password', 'Admin123!')
                    ->press('Login')
                    ->visit('/role')
                    ->visit('/role/create')
                    ->type('name', 'Gebruiker')
                    ->press('Opslaan')
                    ->assertSee('Gebruiker is toegevoegd.');
        });
    }
    public function testRoleEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/role')
                    ->press('.table-text')
                    ->press('.btn-primary', 'Bewerken')
                    ->type('name', 'Gebruiker geedit')
                    ->press('Opslaan')
                    ->assertSee('Gebruiker geedit is bijgewerkt.');
        });
    }
    public function testRoleDelete()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/role')
                ->press('.table-text')
                ->press('Verwijderen')
                ->acceptDialog('Weet u zeker dat u deze locatie wilt verwijderen?')
                ->assertSee('Gebruiker is verwijderd.');
        });
    }
    public function testRoleRedoChanges()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/role')
                ->press('.table-text')
                ->press('.btn-primary', 'Bewerken')
                ->type('name', 'Administrator')
                ->press('Opslaan')
                ->assertSee('Administrator is bijgewerkt.');
        });
    }

    /**
     * Open role page, edit an existing role
     *
     * @return void
     */
    public function testRoleEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->assertPathIs('/role')
                    ->press('.table-text')
                    ->clickLink('Bewerken')
                    ->type('name', 'Leerling')
                    ->press('Opslaan')
                    ->assertSee('is bijgewerkt.');
        });
    }
}
