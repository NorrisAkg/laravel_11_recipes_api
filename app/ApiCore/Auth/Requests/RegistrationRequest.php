<?php

namespace App\ApiCore\Auth\Requests;

use App\ApiCore\Users\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public function authorize()
    {
    }

    public function rules()
    {
        return [
            'firstname' => 'nullable|string',
            'lastname' => 'nullable|string',
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email,NULL,id,deleted_at,NULL',
            'password' => Password::min(8)->mixedCase()->numbers()->required(),
            'telephone' => 'required|string|min:2',
            "picture" => "image|mimes:jpg,png,jpeg,gif,svg|max:4000"
        ];
    }
}
