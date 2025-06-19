<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PresupuestoMailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=> 'required|string',
            'email'=> 'required|email',
            'phone'=> 'required|numeric',
            'enterprise'=> 'required',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Campo nombre es obligatorio',
            'enterprise.required' => 'Campo empresa es obligatorio',
            'email.required' => 'Campo email es obligatorio',
            'phone.required' => 'Campo telefono es obligatorio',
            'name.string'=> 'El campo nombre solo admite texto',
            'phone.numeric'=> 'El telefono debe contener solo numeros'
        ];
    }
}
