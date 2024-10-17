<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FootballTeam;

class FootballTeamSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 equipos de fútbol falsos
        \App\Models\FootballTeam::factory()->count(10)->create();
    }
}

