<?php

use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder
{
    public function run()
    {
     	\App\Dogs::truncate();
     	
     	(new Faker\Generator)->seed(123);

     	factory(App\Dogs::class, 50)->create();
    }
}
