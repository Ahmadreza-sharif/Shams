<?php

namespace App\Http\Resources\Role;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexRoleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array

    {
        return [
            'uuid'        => $this->uuid,
            'title'       => $this->title,
            'description' => $this->translation->description,
            'deletable'   => $this->deletable,
            'updatable'   => $this->updatable,
        ];
    }
}
