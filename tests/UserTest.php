<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{

    // This trait automatically handles rollback the database after each test and migrate it before the next test.
    use DatabaseMigrations;

    private static $URL_PREFIX = '/user';
    private static $TABLE_NAME = 'users';

    private static $NAME1 = 'Luke Skywalker';
    private static $NAME2 = 'Leia Organa';

    private function createDefaultObject()
    {
        return factory(App\User::class)->create([
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
            ->type("a@b.com", 'email')
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
            ->press('Verwijder')
            ->notSeeInDatabase($this::$TABLE_NAME, [
                'name' => $this::$NAME1
            ])
            ->seePageIs($this::$URL_PREFIX)
            ->see('Success');
    }
}
