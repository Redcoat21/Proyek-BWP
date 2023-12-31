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
        Schema::create('subcourses_completion', function (Blueprint $table) {
            $table->id();
            $table->string('student', 100);
            $table->unsignedBigInteger('subcourse');

            $table->foreign('student')->references('username')->on('users');
            $table->foreign('subcourse')->references('id')->on('subcourses');

            $table->timestamp('completed_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcourses_completion');
    }
};
