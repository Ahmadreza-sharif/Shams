<?php

namespace App\Services;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseService
{
    public function __construct(public Model $model)
    {
    }

    public function query(array $payload = []): Builder
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

    public function destroy($eloquent)
    {
        return $eloquent->delete();
    }

    public function find(mixed $value, string $field, bool $firstOrFail = false)
    {
        $query = $this->query()
                      ->when(is_array($value), function (Builder $query) use ($field, $value) {
                          $query->whereIn($field, $value);
                      }, function (Builder $query) use ($field, $value) {
                          $query->where($field, $value);
                      });

        if ($firstOrFail) {
            return $query->firstOrFail();
        } else {
            return $query->get();
        }
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

    public function toggle($eloquent, $field)
    {
        $eloquent->$field = !$eloquent->$field;
        $eloquent->save();
        return $eloquent;
    }
}
