<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //en false no funciona
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            
            //
        ];
    }
}