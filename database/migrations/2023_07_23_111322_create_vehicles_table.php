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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->longText('frant_ing');
            $table->longText('back_ing');
            $table->longText('left_ing');
            $table->longText('right_ing');
            $table->longText('in_ing');
            $table->string('vehicle_plate_no');
            $table->string('vehicle_chassis_no');
            $table->string('vehicle_registed_no');
            $table->string('owner');
            $table->string('vehicle_type');
            $table->string('vehicle_model');
            $table->string('vehicle_color');
            $table->integer('seats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
