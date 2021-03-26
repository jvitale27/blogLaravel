<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()		//cuando ejecuto "php artisan db:seed" se generan estos registros en la tabla
    {
    	//utilizacion de Factories para crear registros. Archivos database\factories 
         User::factory(10)->create();
         Curso::factory(30)->create();

    	//utilizacion de seeders para crear registros. Archivos database\seeders 
        //$this->call(CursoSeeder::class);
    }
}
