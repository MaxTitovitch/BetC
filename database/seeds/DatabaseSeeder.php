<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);

        $this->call(SectionTableSeeder::class);
        $this->call(SportTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(ArticleTableSeeder::class);

        $this->call(ImageTableSeeder::class);
        $this->call(ImageArticleTableSeeder::class);
        
        Model::reguard();
    }
}
