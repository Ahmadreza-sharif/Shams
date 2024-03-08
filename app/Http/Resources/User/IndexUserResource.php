<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexUserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name'          => $this->name,
            'mobile_number' => $this->mobile_number,
            'mobile_prefix' => $this->mobile_prefix,
            'created_at'    => $this->created_at
        ];
    }
}
