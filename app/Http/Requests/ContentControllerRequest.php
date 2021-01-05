<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Http\FormRequest;

class ContentControllerRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:contentcontrolmanager,email,'.Session::get('username').',ccid',
            'gender' => 'required',
            'dob' => 'required',
            'address' => 'required'
        ];
    }
    public function messages(){
        return [
            'name.required'=> "can't left name empty....",
            'email.required'=> "can't left email empty....",
            'email.email'=> "email is not valid....",
            'email.unique'=> "email already in use....",
            'gender.required'=> "gender must be provided....",
            'dob.required'=> "can't left date of birth empty....",
            'address.required'=> "can't left address empty....",
        ];
    }
}
