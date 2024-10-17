<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFootballTeamRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'nombreEstadio' => 'required|string|max:255',
            'capacidadEstadio' => 'required|integer|min:1000|max:90000',
            'entrenador' => 'required|string|max:255',
            'patrocinador' => 'required|string|max:255',
            'equipoRival' => 'required|string|max:255',
            'añoFundacion' => 'required|integer|min:1800|max:' . date('Y'),
            'titulos' => 'required|integer|min:0',
            'historia' => 'required|string|min:10',
            'proximoPartido' => 'required|date|after:today',
        ];
    }


    public function messages(): array
    {
        return [
            'nombreEstadio.required' => 'El nombre del estadio es obligatorio.',
            'capacidadEstadio.min' => 'La capacidad mínima del estadio es de 10000 asientos.',
            'añoFundacion.min' => 'El año de fundación no puede ser menor a 1860.',
            'proximoPartido.after' => 'El próximo partido debe ser una fecha posterior a dia de hoy.',
        ];
    }
}

