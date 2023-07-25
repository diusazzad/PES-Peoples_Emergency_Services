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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['user', 'superadmin', 'admin', 'editor'])->default('user');
            $table->timestamps();
            $table->string('superadmin_token')->nullable(); // Token for 'superadmin'
            $table->string('admin_token')->nullable(); // Token for 'admin'
            $table->string('editor_token')->nullable(); // Token for 'editor'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
