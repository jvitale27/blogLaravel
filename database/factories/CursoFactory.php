<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();      //fake me asigna sentencias predefinidas

        return [
            'name'        => $name,
            'slug'        => Str::slug($name, '-'),         //genero la url amigable, cambio ' ' por '-'   
            'descripcion' => $this->faker->paragraph(),     //parrrafos predefinidos
            'categoria'   => $this->faker->randomElement(['Desarrolllo web', 'Diseño web'])
        ];
    }
}
