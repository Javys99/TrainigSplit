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
            $table->string('last_name', 100);
            $table->string('email' , 255)->unique();
            $table->string('phone_number' , 20)->unique();
            $table->string('gender', 50);
            $table->string('avatar')->nullable();
            $table->integer('rol_id')->default(2);
            $table->integer('height');
            $table->integer('weight');
            $table->date('age', 20);
            $table->string('activity_details', 255);
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
