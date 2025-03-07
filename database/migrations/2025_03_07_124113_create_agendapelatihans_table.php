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
        Schema::create('agendapelatihans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoripelatihan_id')->nullable();
            $table->foreignId('jenjang_id')->nullable();
            $table->string('namakegiatan')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->string('waktupelaksanaan')->nullable();
            $table->integer('jumlahpeserta')->nullable();
            $table->integer('lokasi')->nullable();
            $table->integer('keterangan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendapelatihans');
    }
};
