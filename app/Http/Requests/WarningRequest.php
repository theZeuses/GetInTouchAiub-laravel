<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WarningRequest extends FormRequest
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
            'banDays' => 'sometimes|nullable|numeric|min:1',
            'blockDays' => 'sometimes|nullable|numeric|min:1'
        ];
    }

    public function messages()
    {
        return [
            'banDays.min' => 'Banning days must be at least 1 day.',
            'blockDays.min' => 'Blocking days must be at least 1 day.'
        ];
    }
}
