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
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained()->onDelete('cascade'); // Assume you have a teams table
            $table->foreignId('question_id')->constrained()->onDelete('cascade');
            $table->string('answer_text')->nullable(); // For text answers
            $table->foreignId('answer_id')->nullable()->constrained()->onDelete('cascade'); // For multiple choice answers
            $table->boolean('is_correct')->nullable(); // To mark correctness
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
