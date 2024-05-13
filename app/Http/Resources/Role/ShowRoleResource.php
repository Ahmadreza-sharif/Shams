<?php

namespace App\Http\Resources\Role;

use App\Http\Resources\Permission\IndexPermissionResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowRoleResource extends JsonResource
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
            'description' => $this->description,
            'permissions' => IndexPermissionResource::collection($this->permissions),
            'deletable'   => $this->deletable,
            'updatable'   => $this->updatable,
        ];
    }
}
