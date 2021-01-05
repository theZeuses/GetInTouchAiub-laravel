<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class notice extends FormRequest
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
            "subject"=>'required',
            "body"=>'required'
            //
        ];
    }
    public function messages(){
        return[
            "subject.required"=>'Please enter Subject',
             "body.required"=>'please insert body'
        ];
    }
}
