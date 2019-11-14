<?php

use Illuminate\Database\Seeder;

use App\Image;

class ImageTableSeeder extends Seeder
{
    
    private $initialDataArray = [
        ['name' => 'logo.png', 'url' => '/logo.png'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        for ($i=0; $i < count($this->initialDataArray); $i++) { 
            Image::create([
                'name' => $this->initialDataArray[$i]['name'],
                'url' => $this->initialDataArray[$i]['url'],
            ]);
        }

    }

}
