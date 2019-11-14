<?php

use Illuminate\Database\Seeder;

use App\Country;

class CountryTableSeeder extends Seeder
{
    
    private $initialDataArray = [
        ['name' => 'Россия', 'sport_id' => '1'],
        ['name' => 'Бразилия', 'sport_id' => '1'],
        ['name' => 'Аргентина', 'sport_id' => '1'],
        ['name' => 'США', 'sport_id' => '1'],
        ['name' => 'Германия', 'sport_id' => '1'],

        ['name' => 'Россия', 'sport_id' => '2'],
        ['name' => 'Канада', 'sport_id' => '2'],
        ['name' => 'США', 'sport_id' => '2'],

        ['name' => 'WTA', 'sport_id' => '3'],
        ['name' => 'ATP', 'sport_id' => '3'],
        ['name' => 'Германия', 'sport_id' => '3'],

        ['name' => 'Россия', 'sport_id' => '4'],
        ['name' => 'Канада', 'sport_id' => '4'],
        ['name' => 'Беларусь', 'sport_id' => '4'],

        ['name' => 'Россия', 'sport_id' => '5'],
        ['name' => 'Франция', 'sport_id' => '5'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        for ($i=0; $i < count($this->initialDataArray); $i++) { 
            Country::create([
                'name' => $this->initialDataArray[$i]['name'],
                'sport_id' => $this->initialDataArray[$i]['sport_id'],
            ]);
        }

    }

}
