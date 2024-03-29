<?php

namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;

class CategoryRequest extends Request
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

            'name' => 'required|string',

        ];
    }
    public function messages()
    {
        return [
            'name.required'                => 'Een naam is verplicht!' ,
            'name.string'                  => 'Deze naam is niet geldig!' ,
        ];
    }
}
