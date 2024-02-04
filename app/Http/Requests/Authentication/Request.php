<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'register_type'          => ['required', 'in:email,mobile'],
            'mobile'        => ['required', 'regex:^(?:0|98|\+98|\+980|0098|098|00980)?(9\d{9})^'],
            'mobile_prefix' => ['required', 'string']
        ];
    }
}
