<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class StatusTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testStatusCreate()
    {
        $this->browse(function (Browser $browser) {
          $browser->visit('/login')
                  ->type('email', 'Admin@biep.dev')
                  ->type('password', 'Admin123!')
                  ->press('Login')
                  ->assertPathIs('/home')
                  ->click('button[type="button"]')
                  ->clickLink('Administratie')
                  ->clickLink('Statussen')
                  ->clickLink('Toevoegen...')
                  ->type('Status', 'Beschadigd')
                  ->click('button[type="submit"]');
        });
    }

    public function testStatusEdit()
    {
        $this->browse(function (Browser $browser) {
          $browser->visit('/login')
                  ->type('email', 'Admin@biep.dev')
                  ->type('password', 'Admin123!')
                  ->press('Login')
                  ->assertPathIs('/home')
                  ->click('button[type="button"]')
                  ->clickLink('Administratie')
                  ->clickLink('Statussen')
                  ->press('Beschadigd')
                  ->clickLink('Bewerken')
                  ->type('Status', 'Beschadigd/Bekrast')
                  ->click('button[type="submit"]');

        });
    }
}
