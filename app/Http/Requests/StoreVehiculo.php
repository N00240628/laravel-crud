<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehiculo extends FormRequest
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
            'placa' => ['required','min:7', 'max:7','unique:vehiculos,placa'],
            'modelo' => 'required',
            'propietario' => 'required'
        ];
    }

    public function messages(): array
    {
        return
        [
            'placa.required'=>'La placa no debe ir vacia',
            'modelo.required'=>'Es necesario el modelo o marca',
            'propietario.required'=>'Se requiere nombre del propietario'
        ];
    }
}
