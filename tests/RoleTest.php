<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoleTest extends TestCase
{

    // This trait automatically handles rollback the database after each test and migrate it before the next test.
    use DatabaseMigrations;

    private static $URL_PREFIX = '/role';
    private static $TABLE_NAME = 'roles';

    private static $NAME1 = 'Rebel general';
    private static $NAME2 = 'Imperial stormtrooper';

    private function createDefaultObject()
    {
        return factory(App\Role::class)->create([
            'id' => 1,
            'name' => $this::$NAME1,
        ]);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIfTableIsPresent()
    {
        $this->createDefaultObject();
        $this->seeInDatabase($this::$TABLE_NAME, [
            'name' => $this::$NAME1
        ]);
    }

    public function testCreateNewItemShouldWorkCorrectly()
    {
        $this->visit($this::$URL_PREFIX.'/create')
            ->type($this::$NAME1, 'name')
            // Additional members here

            ->press('Opslaan')
            ->seeInDatabase($this::$TABLE_NAME, [
                'name' => $this::$NAME1
            ])
            ->seePageIs($this::$URL_PREFIX)
            ->see('Success');
    }

    public function testEditItemShouldWorkCorrectly() {
        $item = $this->createDefaultObject();
        $this->visit($this::$URL_PREFIX)
            ->see($this::$NAME1)
            ->visit($this::$URL_PREFIX.'/'.$item->id.'/edit')
            ->see($this::$NAME1)
            ->type($this::$NAME2, 'name')
            ->press('Opslaan')
            ->seeInDatabase($this::$TABLE_NAME, [
                'name' => $this::$NAME2
            ])
            ->seePageIs($this::$URL_PREFIX)
            ->see('Success');
    }

    public function testDestroyItemShouldWorkCorrectly() {
        $item = $this->createDefaultObject();
        $this->visit($this::$URL_PREFIX.'/'.$item->id)
            ->see($this::$NAME1)
            ->press('Delete')
            ->notSeeInDatabase($this::$TABLE_NAME, [
                'name' => $this::$NAME1
            ])
            ->seePageIs($this::$URL_PREFIX)
            ->see('Success');
    }

}
