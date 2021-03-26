<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $curso->name = "Laravel";
        $curso->slug = "Laravel";                   //es una url amigable. el name con espacios cambiados por '-'
		$curso->descripcion = "algo de descripcion";
		$curso->categoria = "Desarrollo web";
		$curso->save();

        $curso2 = new Curso();
        $curso2->name = "Laravel2";
        $curso->slug = "Laravel2";
		$curso2->descripcion = "algo de descripcion";
		$curso2->categoria = "Desarrollo web";
		$curso2->save();

        $curso3 = new Curso();
        $curso3->name = "Laravel3";
        $curso->slug = "Laravel3";
		$curso3->descripcion = "algo de descripcion";
		$curso3->categoria = "Desarrollo web";
		$curso3->save();

    }
}
