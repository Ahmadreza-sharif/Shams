<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Services\TranslationService\TranslationService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeederData('Category')->each(function ($item) {
            $parentCategory = $this->createCategory($item);

            foreach ($item['children'] as $item) {
                $this->createCategory($item);
            }
        });
    }

    public function createCategory($item)
    {
        $category = Category::create([
            'status' => $item['status'],
            'slug'   => str_replace($item['translations'][app()->getLocale()]['title'], '-', ' ')
        ]);

        TranslationService::translate($category, $item);

        return $category;
    }
}
