<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FootballTeam>
 */
class FootballTeamFactory extends Factory
{
    protected $model = \App\Models\FootballTeam::class;
    public function definition(): array
    {
        return [
            'nombreEstadio' => $this->faker->company,
            'capacidadEstadio' => $this->faker->numberBetween(10000, 90000),
            'entrenador' => $this->faker->name,
            'patrocinador' => $this->faker->company,
            'equipoRival' => $this->faker->company,
            'añoFundacion' => $this->faker->year,
            'titulos' => $this->faker->numberBetween(0, 20),
            'historia' => $this->faker->paragraph,
            'proximoPartido' => $this->faker->dateTimeBetween('ahora', '+1 mes'),
        ];
    }
}
