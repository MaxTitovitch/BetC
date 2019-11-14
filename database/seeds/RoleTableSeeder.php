<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    
    private $initialDataArray = [
        ['name' => 'Пользователь'],
        ['name' => 'Администратор'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        for ($i=0; $i < count($this->initialDataArray); $i++) { 
            Role::create([
                'name' => $this->initialDataArray[$i]['name'],
            ]);
        }

    }

}
