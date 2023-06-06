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
        Schema::create('user_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_full_info_id');
            $table->point('user_last_position')->nullable();
            $table->lineString('linestring_column')->nullable();
            $table->polygon('polygon_column')->nullable();
            $table->polygon('polygon_with_hole_column')->polygonWithHoles()->nullable();
            $table->geometryCollection('collection_column')->nullable();
            $table->timestamps();

            $table->foreign('user_full_info_id')->references('id')->on('user_full_infos');
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_locations');
    }
};
