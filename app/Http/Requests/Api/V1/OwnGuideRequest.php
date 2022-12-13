<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class OwnGuideRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'Largo' => "required",
            'Ancho' => "required",
            'Alto'  => 'required',
            'Peso' => 'required',
            'DiceContener' => 'required',

            'Destinatario.Nombre' => 'required',
            'Destinatario.PrimerApellido' => 'required',
            'Destinatario.Telefono' => 'required',
            'Destinatario.Direccion' => 'required',
        ];
    }

    /* public function messages()
    {
        return [
            'Largo.required' => 'Se encesita un largo',
            'Ancho.required' => 'ES necesario un ancho'
        ];
    } */
}
