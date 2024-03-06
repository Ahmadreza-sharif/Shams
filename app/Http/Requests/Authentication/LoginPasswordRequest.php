<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class LoginPasswordRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'password'      => ['string', 'min:3', 'max:256'],
            'mobile'        => ['required', 'regex:^(?:0|98|\+98|\+980|0098|098|00980)?(9\d{9})^'],
        ];
    }
}
