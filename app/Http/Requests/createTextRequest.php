<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createTextRequest extends FormRequest
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
            'receiverid' => 'required|min:4',
            'text' => 'required|min:10'
        ];
    }

    public function messages(){
        return [
            'name.required'=> "can't left empty...."
        ];
    }
}
