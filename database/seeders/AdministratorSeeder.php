<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'               => env('ADMINISTRATOR_NAME'),
            'mobile_number'      => env('ADMINISTRATOR_MOBILE'),
            'mobile_prefix'      => '098',
            'email'              => env('ADMINISTRATOR_EMAIL'),
            'mobile_verified_at' => now(),
            'email_verified_at'  => now(),
            'password'           => Hash::make(env('ADMINISTRATOR_PASSWORD')),
        ]);

        $user->roles()->attach(Role::where('key', RoleEnum::OWNER->value)->first()->id);
    }
}
