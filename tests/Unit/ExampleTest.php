<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Filesystem\Filesystem;
use App\CubeSummation;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $cube = $this->app->make(CubeSummation::class);
        $data = explode(
            "\n",
            $this->app->make('files')->get(public_path('files/cube_summation.txt'))
        );
        $this->assertEquals(
            [4, 4, 27, 0, 1, 1], $cube->process($data)
        );

    }
      
}
