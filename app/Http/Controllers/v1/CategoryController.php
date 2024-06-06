<?php

namespace App\Http\Controllers\v1;

use App\Enums\LangOperationEnum;
use App\Http\Controllers\Controller;
use App\Services\CategoryService\CategoryService;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    public function __construct(
        private readonly CategoryService $service
    )
    {
    }

    public function index()
    {
        $categories = $this->service->paginate();
        return Response::data(generalLang(LangOperationEnum::INDEX, 'category'), $categories);
    }

    public function show()
    {

    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function toggle()
    {

    }
}
