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
                    // ->type('location', 'HZ University')
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
                    // ->type('location', 'HZ')
                    ->press('Opslaan')
                    ->assertSee('is bijgewerkt.');
        });
    }
}
