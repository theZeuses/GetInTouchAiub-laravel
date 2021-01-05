<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editCCRequest extends FormRequest
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
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns',
            'dob' => 'required|date_format:Y-m-d',
            'address' => 'required|min:5',
            'profilepicture' => 'image|mimes:jpg,bmp,png'
        ];
    }

    public function messages(){
        return [
            'name.required'=> "can't left empty...."
        ];
    }
}
