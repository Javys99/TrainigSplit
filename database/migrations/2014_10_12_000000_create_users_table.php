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
            $table->string('name', 100);
            $table->string('email' , 255)->unique();
            $table->string('avatar')->nullable();
            $table->integer('rol_id')->default(2);
            $table->integer('age')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('health_details')->nullable();
            $table->string('food_details')->nullable();
            $table->string('activity_details')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
