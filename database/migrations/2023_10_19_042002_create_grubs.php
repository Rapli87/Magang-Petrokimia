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
        Schema::create('grubs', function (Blueprint $table) {
            $table->id();
            $table->string('tim');
            $table->string('main')->nullable();
            $table->string('menang')->nullable();
            $table->string('kalah')->nullable();
            $table->string('seri')->nullable();
            $table->string('poin')->nullable();
            $table->string('gol')->nullable();
            $table->string('gol_k')->nullable();
            $table->string('selisih')->nullable();
            $table->string('peringkat')->nullable();
            $table->string('grup');
            $table->string('id_klasemen')->nullable();
            $table->string('id_sekolah')->nullable();
            $table->string('id_user')->nullable();
            $table->string('id_lomba')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grubs');
    }
};
