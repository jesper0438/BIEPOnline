<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends DuskTestCase
{
    /**
     * Open user page, create a new user
     *
     * @return void
     */
    public function testUserCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'admin@bieponline.local')
                    ->type('password', 'Admin123!')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->click('button[type="button"]')
                    ->clickLink('Gebruikers')
                    ->assertPathIs('/user')
                    ->press('.btn-success')
                    ->type('name', 'Joery Zegers')
                    ->type('email', 'joery@fabulous.nl')
                    ->type('password', 'Admin123!')
                    ->type('new_password_confirmation', 'Admin123!')
                    ->click('role_id', 'Leerling')
                    ->select('location_id', 'HZ University')
                    ->press('Opslaan')
                    ->assertSee('is toegevoegd.');
        });
    }

    /**
     * Open user page, edit an existing user
     *
     * @return void
     */
    public function testUserEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->assertPathIs('/user')
                    ->press('.table-text')
                    ->clickLink('Bewerken')
                    ->type('name', 'Joery Zegers')
                    ->type('email', 'joery@fabulous.nl')
                    ->type('password', 'Admin123!')
                    ->type('new_password_confirmation', 'Admin123!')
                    ->cli('role_id', 'Leerling')
                    ->select('location_id', 'HZ University')
                    ->press('Opslaan')
                    ->assertSee('is bijgewerkt.');
        });
    }

     public function testUserWegwezen()
    {
        $this->browse(function (Browser $browser) {
            $browser->assertPathIs('/user')
                    ->press('.table-text')
                    ->clickLink('Verwijderen')
                    ->type('name', 'Joery Zegers')
                    ->type('email', 'joery@fabulous.nl')
                    ->type('password', 'Admin123!')
                    ->type('new_password_confirmation', 'Admin123!')
                    ->select('role_id', 'Leerling')
                    ->select('location_id', 'HZ University')
                    ->press('Opslaan')
                    ->assertSee('is bijgewerkt.');
        });
    }

}
