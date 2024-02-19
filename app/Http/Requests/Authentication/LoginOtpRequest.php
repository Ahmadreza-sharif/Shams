<?php

namespace App\Http\Requests\Authentication;

use App\Rules\Auth\OtpExpireTimeRule;
use Illuminate\Foundation\Http\FormRequest;

class LoginOtpRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code'   => ['required', 'numeric', 'digits:6'],
            'secret' => ['required', 'string', 'exists:user_otps,secret', new OtpExpireTimeRule()]
        ];
    }
}

