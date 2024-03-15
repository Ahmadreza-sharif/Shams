<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'          => ['min:3', 'max:256', 'nullable'],
            'email'         => ['min:3', 'max:256', 'nullable', 'email', 'unique:users,email'],
            'mobile_number' => ['required', 'regex:^(?:0|98|\+98|\+980|0098|098|00980)?(9\d{9})^', 'unique:users,mobile_number'],
            'mobile_prefix' => ['required', 'string'],
        ];
    }
}
