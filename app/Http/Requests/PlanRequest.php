<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'ter_muerte' => 'required',
			'ter_invalidez' => 'required',
			'ter_medicos' => 'required',
			'ocu_muerte' => 'required',
			'ocu_invalidez' => 'required',
			'ocu_medicos' => 'required',
			'danos' => 'required',
			'materiales' => 'required',
			'legal' => 'required',
			'limites' => 'required',
			'funerarios' => 'required',
			'grua' => 'required',
			'indem' => 'required',
			'extra' => 'required',
			'valor' => 'required',
			'descripcion' => 'required|string',
			'estado' => 'required',
        ];
    }
}
