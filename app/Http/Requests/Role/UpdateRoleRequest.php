<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'translations'                                        => ['required', 'array'],
            'translations.' . app()->getLocale() . '.title'       => ['required', 'min:2', 'max:256'],
            'translations.' . app()->getLocale() . '.description' => ['min:2', 'max:564', 'nullable'],
            'permissions'                                         => ['array', 'required'],
            'permissions.*'                                       => ['uuid', 'exists:permissions,uuid', 'required']
        ];
    }
}
