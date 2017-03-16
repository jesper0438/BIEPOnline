<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
              [
                'color' => 'Bruin',
                'name' => 'Prentenboeken zonder tekst',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
              ],
              [
                'color' => 'Rood',
                'name' => 'Prentenboeken met tekst',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
              ],
              [
                'color' => 'Blauw',
                'name' => 'Voorleesboeken',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
              ],
              [
                'color' => 'Lichtgroen',
                'name' => 'Leesboeken voor beginners',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
              ],
              [
                'color' => 'Geel',
                'name' => 'Leesboeken onderbouw',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
              ],
              [
                'color' => 'Groen',
                'name' => 'Leesboeken middenbouw',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
              ],
              [
                'color' => 'Grijs',
                'name' => 'Leesboeken bovenbouw',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
              ],

          ]);
    }
}
