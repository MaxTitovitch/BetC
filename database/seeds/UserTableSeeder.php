<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    private $initialDataArray = [
        [
        	'name' => 'Макс Титович',
        	'email' => 'maxtitovitch@mail.ru',
        	'phone' => '+375333038199',
        	'login' => 'MaxFLTop', 
        	'password' => 'imbestest', 
        	'lang' => 'ru',
        ],        
        [
        	'name' => 'Ивонов Иван',
        	'email' => 'ivan.ivanov@mail.ru',
        	'phone' => '+375296038199',
        	'login' => 'ivanBestEst', 
        	'password' => 'qwerty', 
        	'lang' => 'en',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        for ($i=0; $i < count($this->initialDataArray); $i++) { 
            User::create([
                'name' => $this->initialDataArray[$i]['name'],
            	'email' => $this->initialDataArray[$i]['email'],
            	'phone' => $this->initialDataArray[$i]['phone'],
            	'login' => $this->initialDataArray[$i]['login'],
            	'password' => bcrypt($this->initialDataArray[$i]['password']),
            	'lang' => $this->initialDataArray[$i]['lang'],
            ]);
        }

    }

}
