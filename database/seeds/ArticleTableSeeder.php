<?php

use Illuminate\Database\Seeder;

use App\Article;

class ArticleTableSeeder extends Seeder
{
    
    private $initialDataArray = [
        [
        	'title' => 'Россия попбедила',
			'short' => 'В футболе попбедила Россия',
			'text' => 'В футболе попбедила Россия<br>Правда',
			'ranking' => 0,
			'country_id' => 1,
			'user_id' => 1,
        ],
        [
        	'title' => 'Баскетбол в России',
			'short' => 'Новый турнир, ля, ля, ля',
			'text' => 'Новый турнир, ля, ля, ля<br>Правда турнир',
			'ranking' => 0,
			'country_id' => 6,
			'user_id' => 1,
        ],
        [
        	'title' => 'Чемпианат тениса в Индонезии',
			'short' => 'Чемпианат тениса в Индонезии состоится',
			'text' => 'Чемпианат тениса в Индонезии будет завтра, рано',
			'ranking' => 0,
			'country_id' => 9,
			'user_id' => 1,
        ],
        [
        	'title' => 'Хоккей в России',
			'short' => 'Хоккей в России зимой',
			'text' => 'Хоккей в России зимой будет<br>Правда',
			'ranking' => 0,
			'country_id' => 10,
			'user_id' => 1,
        ],
        [
        	'title' => 'Волейбол буит',
			'short' => 'Волейбол буит уууу',
			'text' => 'Волейбол буит ууу, внатуре',
			'ranking' => 0,
			'country_id' => 13,
			'user_id' => 1,
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        for ($i=0; $i < count($this->initialDataArray); $i++) { 
            Article::create([
                'title' => $this->initialDataArray[$i]['title'],
                'short' => $this->initialDataArray[$i]['short'],
                'text' => $this->initialDataArray[$i]['text'],
                'ranking' => $this->initialDataArray[$i]['ranking'],
                'country_id' => $this->initialDataArray[$i]['country_id'],
                'user_id' => $this->initialDataArray[$i]['user_id'],
            ]);
        }

    }

}
