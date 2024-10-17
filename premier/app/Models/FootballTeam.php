<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballTeam extends Model
{
    use HasFactory;

    protected $table = 'football_teams';


    protected $fillable = [
        'nombreEstadio',
        'capacidadEstadio',
        'entrenador',
        'patrocinador',
        'equipoRival',
        'añoFundacion',
        'titulos',
        'historia',
        'proximoPartido',
    ];
}
