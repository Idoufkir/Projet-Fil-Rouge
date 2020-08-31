<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Facturevalidator extends FormRequest
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
            'Subject' => 'bail|required|min:10',
            'Desc'  => 'bail|required|min:10',
            'ID_manager' => 'bail|required',
            'ID_client' => 'bail|required'
        ];
    }
}
