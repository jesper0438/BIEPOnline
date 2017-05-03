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
                    ->assertPathIs('/home')
                    ->click('button[type="button"]')
                    ->clickLink('Rollen')
                    ->assertPathIs('/role')
                    ->press('.btn-success')
                    ->type('name', 'Student')
                    ->press('Opslaan')
                    ->assertSee('is toegevoegd.');
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
