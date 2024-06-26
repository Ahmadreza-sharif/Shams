<?php

namespace Database\Seeders;

use App\Enums\SmsEnum;
use App\Models\Sms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeederData('Sms')->each(fn($sms) => Sms::updateOrCreate($sms));
    }
}
