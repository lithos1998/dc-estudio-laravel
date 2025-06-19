<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudPresupuestoRequest extends FormRequest
{
    // protected $redirectRoute = 'home.contact'; 
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
            'nombre'=>'required|max:255',
            'email'=>'required|email|max:255',
            'telefono'=>'required|integer|max:99999999',
            'rubro'=>'required|max:55',
            'm2'=>'required|max:10',
            'direccion'=>'required|max:255',
            'tramite'=>'required|max:255'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'nombre' => filter_var($this->input('nombre'), FILTER_SANITIZE_STRING),
            'email' => filter_var($this->input('email'), FILTER_SANITIZE_EMAIL),
            'rubro' => filter_var($this->input('rubro'), FILTER_SANITIZE_STRING),
            'm2' => filter_var($this->input('m2'), FILTER_SANITIZE_STRING),
            'direccion' => filter_var($this->input('direccion'), FILTER_SANITIZE_STRING),
            'tramite' => filter_var($this->input('tramite'), FILTER_SANITIZE_STRING),
        ]);
    }

    public function messages()
    {
        return[
            'nombre.required' => 'Este campo es obligatorio',
            'email.required' => 'Este campo es obligatorio',
            'telefono.required' => 'Este campo es obligatorio',
            'rubro.required' => 'Este campo es obligatorio',
            'm2.required' => 'Este campo es obligatorio',
            'direccion.required' => 'Este campo es obligatorio',
            'tramite.required' => 'Este campo es obligatorio',
        ];
    }
}