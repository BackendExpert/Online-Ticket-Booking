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
        Schema::create('train_stops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('train_id');
            $table->foreign('train_id')->references('id')->on('trains')->onDelete('cascade');
            $table->string('station');
            $table->string('arrival_time');
            $table->string('departure_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train_stops');
    }
};
