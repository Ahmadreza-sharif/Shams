<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('body_id');
            $table->string('key');
            $table->integer('params_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.\
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('sms');
    }
};
