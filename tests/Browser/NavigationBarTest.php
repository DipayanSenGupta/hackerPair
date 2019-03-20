<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NavigationBarTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function testLocationLinkTakesUserToLocationsIndex(){
        $this->browse(function(Browser $browser){
            $browser->visit('/')
                    ->clickLink('Locations')
                    ->assertPathIs('/locations')
                    ->assertSee('Locations');

        });
    }
}
