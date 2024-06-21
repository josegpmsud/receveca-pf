<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContratoRequest extends FormRequest
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
			'id_usuario' => 'required',
			'id_vehiculo' => 'required',
			'id_plan' => 'required',
			'fecha_ini' => 'required',
			'fecha_fin' => 'required',
			'codigo' => 'required',
			'cobertura' => 'required',
			'pago' => 'required',
			'estado' => 'required',
        ];
    }
}
