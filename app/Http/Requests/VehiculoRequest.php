<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoRequest extends FormRequest
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
			'id_cliente' => 'required',
			'id_marca' => 'required',
			'id_clase' => 'required',
			'modelo' => 'required|string',
			'id_color' => 'required',
			'id_tipo' => 'required',
			'id_uso' => 'required',
			'placa' => 'required|string',
			'ano' => 'required',
			'peso' => 'required|string',
			'serial_motor' => 'required|string',
			'puestos' => 'required',
			'serial_niv' => 'required|string',
        ];
    }
}
