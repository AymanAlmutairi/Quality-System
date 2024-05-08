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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('method');
            $table->integer('q1_total')->nullable();
            $table->integer('q2_total')->nullable();
            $table->integer('q3_total')->nullable();
            $table->integer('q4_total')->nullable();
            $table->integer('q5_total')->nullable();
            $table->integer('q6_total')->nullable();
            $table->integer('q1_clo')->nullable();
            $table->integer('q2_clo')->nullable();
            $table->integer('q3_clo')->nullable();
            $table->integer('q4_clo')->nullable();
            $table->integer('q5_clo')->nullable();
            $table->integer('q6_clo')->nullable();
            $table->integer('course_id')->constrained('courses');
            $table->integer('section_id')->constrained('sections');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
