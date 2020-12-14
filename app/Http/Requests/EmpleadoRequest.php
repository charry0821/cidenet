<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
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
     * Aplica las reglas de validación de campos
     *
     * @return array
     */
    public function rules()
    {
        return [
            'primer_apellido' => ['required', 'max:20'],
            'segundo_apellido' => ['required', 'max:20'],
            'primer_nombre' => ['required', 'max:20'],
            'otro_nombre' => ['sometimes', 'max:50'],
            'tipo_identificacion_id' => ['required'],
            'numero_identificacion' => ['required', 'max:20'],
            'pais_id' => ['required', 'integer'],
            'area_id' => ['required', 'integer'],
            'fecha_ingreso' => ['required', 'date'],
        ];
    }

    /**
     * Retornar los mensajes de error 
     *
     * @return array
     */
    public function messages(){
        return [
            'primer_apellido.max' => 'Cantidad máxima 20 de caracteres excedida',
            'primer_apellido.required' => 'El campo primer apellido es requerido',
            'segundo_apellido.max' => 'Cantidad máxima 20 de caracteres excedida',
            'segundo_apellido.required' => 'El campo segundo apellido es requerido',
            'primer_nombre.max' => 'Cantidad máxima 20 de caracteres excedida',
            'primer_nombre.required' => 'El campo primer nombre es requerido',
            'otro_nombre.max' => 'Cantidad máxima 50 de caracteres excedida',
            'tipo_identificacion_id.required' => 'El campo tipo identificacion es requerido',
            'numero_identificacion.max' => 'Cantidad máxima 20 de caracteres excedida',
            'numero_identificacion.required' => 'El campo numero de identificacion es requerido',
            'pais_id.integer' => 'El campo pais debe ser un entero',
            'pais_id.required' => 'El campo pais es requerido',
            'area_id.integer' => 'El campo area debe ser un entero',
            'area_id.required' => 'El campo area es requerido',
            'fecha_ingreso.date' => 'El campo fecha ingreso debe ser una fecha',
            'cantidad.required' => 'El campo fecha ingreso es requerido',
        ];
    }
}
