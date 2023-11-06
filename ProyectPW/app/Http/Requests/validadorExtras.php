<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorExtras extends FormRequest
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
            'txtEmpresa' => 'required|min:3',
            'txtProducto' => 'required|min:3',
            'txtProveedor' => 'required|min:3',
            'txtFecha' => 'required|date',
            'txtDatos' => 'required',
            'txtMarca' => 'required|min:3',
            'txtCantidad' => 'required|numeric',
            'txtTotal' => 'required|numeric'
        ];
    }
}

