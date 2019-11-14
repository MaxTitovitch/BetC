<?php

use Illuminate\Database\Seeder;

use App\Model;
class ImageArticleTableSeeder extends Seeder
{
    
    private $initialDataArray = [
        ['image_id' => 1, 'article_id' => 1],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        for ($i=0; $i < count($this->initialDataArray); $i++) { 
            DB::table('image_article')->insert([
                'image_id' => $this->initialDataArray[$i]['image_id'],
                'article_id' => $this->initialDataArray[$i]['article_id'],
            ]);
        }

    }

}
