<?php

use Illuminate\Database\Seeder;

use App\Section;

class SectionTableSeeder extends Seeder
{
    
    private $initialDataArray = [
        ['name' => 'Главная'],
        ['name' => 'Live'],
        ['name' => 'TV'],
        ['name' => 'Контакты'],
        ['name' => 'О нас'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        for ($i=0; $i < count($this->initialDataArray); $i++) { 
            Section::create([
                'name' => $this->initialDataArray[$i]['name'],
            ]);
        }

    }

}
