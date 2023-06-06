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
        Schema::create('user_full_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('usernid');
            $table->binary('userphoto')->nullable();
            $table->boolean('is_available');
            $table->char('fullname', 100);
            $table->dateTimeTz('account_created_at');
            $table->dateTime('last_login');
            // $table->date('created_at');
            $table->decimal('weight', 3, 2);
            $table->enum('gender', ['male', 'female', 'third']);
            $table->float('float_column', 8, 2);
            $table->geometry('user_last_position')->nullable();
            $table->geometry('geometry_column')->nullable();
            $table->unsignedInteger('increments_column');
            $table->integer('integer_column');
            $table->ipAddress('ip_address_column');
            $table->json('json_column')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_full_infos');
    }
};
