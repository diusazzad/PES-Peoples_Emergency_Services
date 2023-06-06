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
        Schema::create('user_daily_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_full_info_id');
            $table->string('title');
            $table->text('description');
            $table->boolean('completed')->default(false);
            $table->timestamps();

            $table->foreign('user_full_info_id')->references('id')->on('user_full_infos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_daily_tasks');
    }
};
