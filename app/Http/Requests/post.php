<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class post extends FormRequest
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
            "post"=>'required'
        ];
    }
    public function messages(){
        return[
            "post.required"=>'before submit please write something '
        ];
    }
    
}
