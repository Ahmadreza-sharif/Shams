<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'         => ['min:2', 'max:256', 'required'],
            'description'   => ['min:2', '564', 'nullable'],
            'permissions'   => ['array'],
            'permissions.*' => ['uuid','exists:permissions,uuid']
        ];
    }
}

