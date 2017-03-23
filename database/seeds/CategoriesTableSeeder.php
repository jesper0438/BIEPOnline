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
              [ip: "192.168.10.10"
memory: 2048
cpus: 1
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: ~/Documents/Hz/BIEPonline/BIEPOnline
      to: /home/vagrant/code/bieponline
    - map: ~/Documents/Hz/proximitymine
      to: /home/vagrant/code/proximitymine
    - map: ~/Documents/Hz/phpmyadmin
      to: /home/vagrant/code/phpmyadmin
sites:
    - map: phpmyadmin.dev
      to: /home/vagrant/code/phpmyadmin
    - map: bieponline.dev
      to: /home/vagrant/code/bieponline/public
    - map: proximitymine.dev
      to: /home/vagrant/code/proximitymine/public
databases:
    - bieponline
    - proximitymine

# blackfire:
#     - id: foo
#       token: bar
#       client-id: foo
#       client-token: bar


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
                'color' => 'Grijs 1',
                'name' => 'Leesboeken onderbouw',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
              ],
              [
                'color' => 'Grijs 2',
                'name' => 'Leesboeken middenbouw',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
              ],
              [
                'color' => 'Grijs 3',
                'name' => 'Leesboeken bovenbouw',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
              ],

          ]);
    }
}
