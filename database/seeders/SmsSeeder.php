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
        $sms = collect([
            ['body_id' => 176219, 'key' => SmsEnum::SEND_OTP->value, 'params_count' => 1],
        ]);

        $sms->each(fn($sms) => Sms::updateOrCreate($sms));
    }
}
