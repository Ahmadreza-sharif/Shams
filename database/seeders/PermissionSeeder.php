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


            $parentPermission = $this->createPermission($item);

            foreach ($item['permissions'] as $permission) {
                $test = $this->createPermission($permission, $parentPermission->id);
            }
        });
    }

    private function createPermission($permission, $parentId = null)
    {
        $object = Permission::create([
            'key'       => $permission['key'],
            'parent_id' => $parentId
        ]);

        TranslationService::translate($object, $permission['translations']);

        return $object;
    }
}
