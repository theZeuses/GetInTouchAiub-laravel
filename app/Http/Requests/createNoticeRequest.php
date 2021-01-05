<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createNoticeRequest extends FormRequest
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
            'towhom' => 'required',
            'noticesubject' => 'required|min:10',
            'noticebody' => 'required|min:20'
        ];
    }

    public function messages(){
        return [
            
        ];
    }
}
