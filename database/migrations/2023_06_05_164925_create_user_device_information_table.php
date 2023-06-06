<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_device_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_full_info_id');
            $table->ipAddress('ip_address');
            $table->string('user_region');
            $table->string('mobile_carrier');
            $table->string('device_model');
            $table->string('network_type');
            $table->string('screen_resolution');
            $table->string('operating_system');
            $table->string('app_name');
            $table->string('file_type');
            $table->text('keystroke_pattern');
            $table->string('audio_settings');
            $table->string('connected_audio_device');
            $table->string('login_location');
            $table->timestamps();

            $table->foreign('user_full_info_id')->references('id')->on('user_full_infos');
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_device_information');
    }
};
