<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostularMailRequest extends FormRequest
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
            'dni'=> 'required|numeric',
            'birth'=> 'required|date',
            'phone'=> 'required|numeric',
            'file' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Campo nombre es obligatorio',
            'email.required' => 'Campo email es obligatorio',
            'dni.required' => 'Campo DNI es obligatorio',
            'birth.required' => 'Campo fecha de nacimiento es obligatorio',
            'phone.required' => 'Campo telefono es obligatorio',
            'name.string'=> 'El campo nombre solo admite texto',
            'dni.numeric'=> 'El dni debe contener solo numeros',
            'phone.numeric'=> 'El telefono debe contener solo numeros',
            'file.required' => 'Debe subir un archivo'            
        ];
    }
}
