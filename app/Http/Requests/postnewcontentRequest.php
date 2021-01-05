<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postnewcontentRequest extends FormRequest
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
            'text' => 'required|min:5',
            'file' => 'mimes:jpg,bmp,png,pdf'
        ];
    }

    public function messages(){
        return [
            'name.required'=> "can't left empty...."
        ];
    }
}