<?php

namespace App\Http\Resources\User;

use App\Helpers\AppHelper;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'               => $this->name,
            'uuid'               => $this->uuid,
            'mobile_number'      => $this->mobile_number,
            'mobile_prefix'      => $this->mobile_prefix,
            'mobile_verified_at' => $this->mobile_verified_at,
            'email_verified_at'  => $this->email_verified_at,
            'email'              => $this->email,
            'created_at'         => $this->created_at,
            'block'              => BooleanFormatResponse($this->block)
        ];
    }
}
