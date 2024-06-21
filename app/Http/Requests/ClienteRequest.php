<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
			'nac' => 'required|string',
			'nombre' => 'required|string',
			'apellido' => 'required|string',
			'cedula_rif' => 'required|string',
			'b_nac' => 'required|string',
			'b_nombre' => 'required|string',
			'b_apellido' => 'required|string',
			'b_cedula' => 'required|string',
			'direccion' => 'required|string',
			'telefono' => 'required|string',
			'estado' => 'required',
        ];
    }
}
