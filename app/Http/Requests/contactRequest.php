<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
         'nombre'   => 'required|string|max:100',
         'email'    => 'required|email',
         'telefono' => 'nullable|string|max:20',
         'archivo'  => 'nullable|file|mimes:pdf,jpg,png|max:2048',
         'mensaje'  => 'required|string|min:10|max:1000',
         'terminos' => 'accepted',
        ];
    }
}