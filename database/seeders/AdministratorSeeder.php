<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'               => env('ADMINISTRATOR_NAME'),
            'mobile_number'      => env('ADMINISTRATOR_MOBILE'),
            'mobile_prefix'      => '098',
            'email'              => env('ADMINISTRATOR_EMAIL'),
            'mobile_verified_at' => now(),
            'email_verified_at'  => now(),
            'password'           => \Illuminate\Support\Facades\Hash::make(env('ADMINISTRATOR_PASSWORD')),
        ]);
    }
}
