<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Services\TranslationService\TranslationService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeederData('Role')->each(function ($item) {
            $role = Role::create([
                'deletable' => $item['deletable'],
                'updatable' => $item['updatable'],
                'key'       => $item['key'] ?? '',
            ]);

            $permissions = Permission::whereIn('key', $item['permissions'])->get();

            $role->permissions()->attach($permissions->pluck('id')->toArray());

            TranslationService::translate($role, $item['translations']);
        });
    }
}
