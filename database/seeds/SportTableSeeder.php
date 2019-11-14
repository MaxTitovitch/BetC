<?php

use Illuminate\Database\Seeder;

use App\Sport;

class SportTableSeeder extends Seeder
{
    
    private $initialDataArray = [
        ['name' => 'Футбол', 'section_id' => '1'],
        ['name' => 'Баскетбол', 'section_id' => '1'],
        ['name' => 'Теннис', 'section_id' => '1'],
        ['name' => 'Хоккей', 'section_id' => '1'],
        ['name' => 'Волейбол', 'section_id' => '1'],
        // ['name' => 'Другие', 'section_id' => '1'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        for ($i=0; $i < count($this->initialDataArray); $i++) { 
            Sport::create([
                'name' => $this->initialDataArray[$i]['name'],
                'section_id' => $this->initialDataArray[$i]['section_id'],
            ]);
        }

    }

}
