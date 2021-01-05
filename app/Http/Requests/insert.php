<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class insert extends FormRequest
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
            "userid"=>'required | unique:user,userid',
            "name"=>'required',
            "email"=>'required|email',
            "add"=>'required',
            "gender"=>'required',
            "dob"=>'required',
            "gender"=>'required',
            "type"=>'required',
            //
        ];
    }
    public function messages(){
        return[
            "userid.required"=>'user id can not be empty',
            "userid.unique"=>'user id already taken',
            "name.required"=>'please insert a name',
            "email.required"=>'Please enter email',
            "email.email"=>'please enter a valid email',
            "add.required"=>'please insert address',
            "gender.required"=>'Select a gender',
            "dob.required"=>'please enter date of birth',
            "type.required"=>'please insert type'
        ];
    }
}
