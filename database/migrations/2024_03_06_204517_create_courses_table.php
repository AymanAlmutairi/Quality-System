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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code');
            $table->string('college')->nullable();
            $table->string('department')->nullable();
            $table->string('program')->nullable();
            $table->string('collage')->nullable();
            $table->integer('level')->nullable();
            $table->string('institution')->nullable();
            $table->string('Academic_year')->nullable();
            $table->string('semester')->nullable();
            $table->integer('instructor_id')->constrained('users');
            $table->integer('Coordinator_id')->constrained('users');
            $table->integer('user_id')->constrained('users');
            $table->string('location')->nullable();
            $table->integer('number_of_sections')->nullable();
            $table->integer('number_of_start')->nullable();
            $table->integer('number_of_complete')->nullable();
            $table->date('start_date')->nullable();
            $table->integer('number_of_lectures')->nullable();
            $table->integer('studio')->nullable();
            $table->string('field')->nullable();
            $table->string('tutorial')->nullable();
            $table->text('others')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours');
    }
};
