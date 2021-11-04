<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:5|max:150',
            'email' => 'required|string|email|max:120|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'role' => 'required',
            'avatar' => 'sometimes|image|mimes:png,jpg,jpeg|max:3048',
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Nama tidak boleh kosong",
            'email.required' => "Email tidak boleh kosong",
            'password.required' => "Password tidak boleh kosong",
            'role.required' => "Role tidak boleh kosong",
        ];
    }
}
