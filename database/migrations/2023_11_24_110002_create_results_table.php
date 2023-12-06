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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('round');
            $table->string('team1_name');
            $table->string('team1_logo');
            $table->string('team1_score')->default('coming soon');
            $table->string('team2_name');
            $table->string('team2_logo');
            $table->string('team2_score')->default('coming soon');
            $table->dateTime('match_date');
            $table->string('match_venue');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
