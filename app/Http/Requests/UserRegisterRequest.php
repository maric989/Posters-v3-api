<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username'  => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'A title is required',
            'email.required'  => 'A message is required',
        ];
    }

}
