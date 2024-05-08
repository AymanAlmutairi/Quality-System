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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('final')->nullable();
            $table->integer('quiz')->nullable();
            $table->integer('midterm')->nullable();
            $table->integer('assignments')->nullable();
            $table->string('project')->nullable();
            $table->string('lap')->nullable();
            $table->text('others')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
