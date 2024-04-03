<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Services\TranslationService\TranslationService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = SeederData('Permission');

        $permissions->each(function ($item) {

            $permission = Permission::create([
                'key' => $item['key']
            ]);

            TranslationService::translate($permission, $item['translations']);
        });
    }
}
