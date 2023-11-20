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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('grup')->nullable();
            $table->string('id_grup')->nullable();
            $table->integer('grup_id')->nullable();
            $table->string('id_jadwal')->nullable();
            $table->string('id_tim')->nullable();
            $table->string('id_tim2')->nullable();
            $table->date('tanggal');
            $table->time('mulai');
            $table->time('selesai');
            $table->string('status');
            $table->string('skor');
            $table->string('id_sekolah')->nullable();
            $table->string('id_user')->nullable();
            $table->string('id_lomba')->nullable();                         
            $table->foreign('grup_id')->references('id')->on('grubs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
        
    }
};
