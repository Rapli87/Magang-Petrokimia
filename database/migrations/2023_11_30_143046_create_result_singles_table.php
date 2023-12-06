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
        Schema::create('result_singles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('result_id'); // Relasi ke tabel results
            $table->foreign('result_id')->references('id')->on('results')->onDelete('cascade');
            
            // Informasi untuk tim 1
            $table->string('team1_name');
            $table->string('team1_logo');
            $table->string('team1_score');
            $table->text('team1_scorers')->nullable();
            $table->text('team1_scorers_minutes')->nullable();
            $table->integer('team1_penalty')->default(0);
            $table->decimal('team1_ball_possession', 5, 1)->default(0);
            $table->integer('team1_goals')->default(0);
            $table->integer('team1_shots_on_target')->default(0);
            $table->integer('team1_shots')->default(0);
            $table->integer('team1_saves')->default(0);
            $table->integer('team1_yellow_cards')->default(0);
            $table->integer('team1_red_cards')->default(0);
            
            // Informasi untuk tim 2
            $table->string('team2_name');
            $table->string('team2_logo');
            $table->string('team2_score');
            $table->text('team2_scorers')->nullable();
            $table->text('team2_scorers_minutes')->nullable();
            $table->integer('team2_penalty')->default(0);
            $table->decimal('team2_ball_possession', 5, 1)->default(0);
            $table->integer('team2_goals')->default(0);
            $table->integer('team2_shots_on_target')->default(0);
            $table->integer('team2_shots')->default(0);
            $table->integer('team2_saves')->default(0);
            $table->integer('team2_yellow_cards')->default(0);
            $table->integer('team2_red_cards')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_singles');
    }
};
