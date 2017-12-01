<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CubeSummationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCubeSummation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertTitle('Cube Summation Upload')
                ->assertSee('Cube Summation Upload')
                ->assertSee('File')
                ->attach('cube_summation', public_path('files/cube_summation.txt'))
                ->press('Upload');
            
            $browser->waitForText('Cube Summation Result')
                ->assertSee('Data')
                ->assertSeeIn('#data', '2')
                ->assertSeeIn('#data', '4 5')
                ->assertSeeIn('#data', 'UPDATE 2 2 2 4')
                ->assertSeeIn('#data', 'QUERY 1 1 1 3 3 3')
                ->assertSeeIn('#data', 'UPDATE 1 1 1 23')
                ->assertSeeIn('#data', 'QUERY 2 2 2 4 4 4')
                ->assertSeeIn('#data', 'QUERY 1 1 1 3 3 3')
                ->assertSeeIn('#data', '2 4')
                ->assertSeeIn('#data', 'UPDATE 2 2 2 1')
                ->assertSeeIn('#data', 'QUERY 1 1 1 1 1 1')
                ->assertSeeIn('#data', 'QUERY 1 1 1 2 2 2')
                ->assertSeeIn('#data', 'QUERY 2 2 2 2 2 2')
                ->assertSee('Result')
                ->assertSeeIn('#results', '4')
                ->assertSeeIn('#results', '4')
                ->assertSeeIn('#results', '27')
                ->assertSeeIn('#results', '0')
                ->assertSeeIn('#results', '1')
                ->assertSeeIn('#results', '1');
        });
    }
}
