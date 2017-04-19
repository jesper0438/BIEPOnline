<?php

use App\Location;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LocationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    private static $TABLE_NAME = 'locations';
    private static $NAME1 = 'De Stroming';


    private function createDefaultLocation()
    {
        return factory(App\Location::class)->create([
            'id' => 1,
            'name' => $this::$NAME1,
        ]);
    }
    public function testIfLocationTableIsPresent()
    {
        $this->createDefaultLocation();
        $this->assertDatabaseHas($this::$TABLE_NAME, [
            'name' => $this::$NAME1
        ]);
    }
    public function deleteDefaultLocation()
    {
        $this->json('DELETE', '/location/1', ['id' => 1]);

    }
    public function testIfLocationTableIsAbletoDelete()
    {
        $this->deleteDefaultLocation();
        $this->assertDatabaseMissing($this::$TABLE_NAME, [
            'name' => $this::$NAME1
        ]);
    }

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
