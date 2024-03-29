<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_name'      => 'required|string',
            'address'  => 'required',
            'username'  => 'required',
            'user_type'  => 'required',
            'email'     => 'required|string|email|unique:users,email|max:50',
            'password'  => 'required|min:6'
        ];
    }
}
