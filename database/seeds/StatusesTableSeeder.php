<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('statuses')->insert([
          [
              'status'      => 'Nieuwstaat',
              'created_at'  => \Carbon\Carbon::now()->toDateTimeString(),
              'updated_at'  => \Carbon\Carbon::now()->toDateTimeString(),
          ],
          [
              'status'      => 'Lichtelijk beschadigd',
              'created_at'  => \Carbon\Carbon::now()->toDateTimeString(),
              'updated_at'  => \Carbon\Carbon::now()->toDateTimeString(),
          ],
          [
              'status'      => 'Kapot',
              'created_at'  => \Carbon\Carbon::now()->toDateTimeString(),
              'updated_at'  => \Carbon\Carbon::now()->toDateTimeString(),
          ],
      ]);
    }
}
