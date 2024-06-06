<?php

namespace App\Services\CategoryService;

use App\Models\Category;
use App\Services\BaseService;

class CategoryService extends BaseService
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
}
