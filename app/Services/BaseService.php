<?php

namespace App\Services;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;

class BaseService
{
    public function __construct(private readonly Model $model)
    {
    }

    public function query(array $payload = []): \Illuminate\Database\Eloquent\Builder
    {
        return $this->model->query();
    }

    public function store($payload)
    {
        return $this->model->create($payload);
    }

    public function update($payload, $eloquent)
    {
        return $eloquent->update($payload);
    }

    public function find(string $value, string $field, bool $firstOrFail)
    {
        return $this->query()->where($field, $value)->when($firstOrFail, function ($q) {
            $q->firstOrFail();
        }, function ($q) {
            $q->first();
        });
    }

    public function paginate(array $payload = []): Collection|LengthAwarePaginator|array
    {
        $limit = request()?->input('page_limit');

        if ($limit == '-1') {
            return $this->query($payload)->get();
        } elseif (is_null($limit)) {
            return $this->query($payload)->paginate(15);
        } else {
            return $this->query($payload)->paginate($limit);
        }

    }
}
