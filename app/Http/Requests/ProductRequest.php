<?php

namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;

class ProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'shortDescription' => 'required|string',
            'longDescription' => 'string',


        ];
    }
    public function messages()
    {
        return [
            'shortDescription.required'    => 'Korte omschrijving is verplicht!',
            'shortDescription.string'       => 'Deze korte omschrijving is niet geldig!',
            'longDescription.string'       => 'Deze lange omschrijving is niet geldig!',



        ];
    }
}
