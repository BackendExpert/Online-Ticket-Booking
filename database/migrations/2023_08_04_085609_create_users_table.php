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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->longText('profile_img')->default(0);
            $table->string('name');
            $table->string('email')->unique();
            $table->longText('address')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('role')->default(3); //Admin - 1, staff - 2, user - 3
            $table->integer('twoFact')->default(0);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
