<?php

namespace App\Services\UserService;

use App\Models\User;
use App\Services\BaseService;
use Illuminate\Database\Eloquent\Builder;

class UserService extends BaseService
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store($payload)
    {
        return $this->model->create([
            'name'          => $payload['name'] ?? $payload['mobile_number'],
            'email'         => $payload['email'] ?? null,
            'mobile_number' => $payload['mobile_number'],
            'mobile_prefix' => $payload['mobile_prefix'],
        ]);
    }

    public function update($payload, $eloquent)
    {
        $eloquent->update($payload);
        return $eloquent;
    }

    public function query(array $payload = []): Builder
    {
        return $this->model->query()->where('block', 0);
    }


}
