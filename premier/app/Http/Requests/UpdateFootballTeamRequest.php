<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFootballTeamRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'nombreEstadio' => 'sometimes|required|string|max:255',
            'capacidadEstadio' => 'sometimes|required|integer|min:1000|max:90000',
            'entrenador' => 'sometimes|required|string|max:255',
            'patrocinador' => 'sometimes|required|string|max:255',
            'equipoRival' => 'sometimes|required|string|max:255',
            'añoFundacion' => 'sometimes|required|integer|min:1800|max:' . date('Y'),
            'titulos' => 'sometimes|required|integer|min:0',
            'historia' => 'sometimes|required|string|min:10',
            'proximoPartido' => 'sometimes|required|date|after:today',
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
