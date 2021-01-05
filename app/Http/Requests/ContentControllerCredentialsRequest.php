<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Http\FormRequest;

class ContentControllerCredentialsRequest extends FormRequest
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
            'pass' => "required|min:8|same:confirmpass",
            "confirmpass" => 'required',
            'currentpass' => ['required', function($attribute, $value, $fail){
                $user = User::where('userid', Session::get('username'))
                            ->where('password', $value)
                            ->first();
                if($user == null){
                    $fail('current password is incorrect');
                }
            }]
        ];
    }
    public function messages()
    {
        return [
            'pass.required' => "provide new password",
            'pass.min' => 'password must be minimum 8 characters',
            "confirmpass.required" => 'retype new password',
            'currentpass.required' => 'provide current password',
            'pass.same' => 'password does not match'
        ];
    }
}
