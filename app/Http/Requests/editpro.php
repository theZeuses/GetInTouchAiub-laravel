<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editpro extends FormRequest
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
            "name"=>'required',
            "email"=>'required|email',
            "add"=>'required',
            "dob"=>'required',
            
        ];
    }
    public function messages(){
        return[
            "name.required"=>'please insert a name',
            "email.required"=>'Please enter email',
            "email.email"=>'please enter a valid email',
            "add.required"=>'please insert address',
           
            "dob.required"=>'please enter date of birth',
            
        ];
    }
}
