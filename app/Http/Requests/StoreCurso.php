<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        return false;
        return true;            //no voy a validar los usuarios aqui. Lo hare de otra manera
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //valida los datos segun las reglas que le paso. Si no se cumplen detiene el script me devuelve la pagina 
        //con una variable interna de error @error y $message
        return [
            'name'        => 'required|max:20|regex:/^[\pL\pN #*_&]+$/',
            'descripcion' => 'required|min:10',
            'categoria'   => 'required'
        ];
        //entre corchetes agrego los caracteres que permito en el array. Solo 5,6 o 7 caracteres, probar!!!!! 
        //'regex:/^[a-z0-9 .\-]+$/'     //esto es para la validation rules de Laravel
        //'regex:/^[\pL\pN +-]+$/'
        //'no_regex:/^[\pL\pN +-]+$/'   //impido esos caracteres
        //preg_match('/^[\pL\pN .-]+$/', $firstname)
        //\pL is any letter in any language, matches also Chinese, Hebrew, Arabic, ... characters.
        //\pN any kind of numeric character (means also e.g. roman numerals)
        //if you want to limit to digits, then use \pNd
    }

    //con esta funcion etiqueto los campos para que aparezcan como quiero en los errores
    public function attributes()
    {
        return[
            'name' => 'Nombre del curso',
        ];
    }

    //con esto directamente cambio todo el mensaje de un error
    public function messages()
    {
        return[
            'descripcion.required' => 'Debe ingresar una descripcion del curso'
        ];
    }
}
