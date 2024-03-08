<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        User::create([
            'name'               => env('ADMINISTRATOR_NAME'),
            'mobile_number'      => env('ADMINISTRATOR_MOBILE'),
            'mobile_prefix'      => '098',
            'email'              => env('ADMINISTRATOR_EMAIL'),
            'mobile_verified_at' => now(),
            'email_verified_at'  => now(),
            'password'           => \Illuminate\Support\Facades\Hash::make(env('ADMINISTRATOR_PASSWORD'))
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
