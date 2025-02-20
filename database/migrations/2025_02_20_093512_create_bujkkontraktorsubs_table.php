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
        Schema::create('bujkkontraktorsubs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bujkkontraktor_id');
            $table->string('nama_pengurus');
            $table->string('sub_klasifikasi_layanan');
            $table->string('kode');
            $table->string('kualifikasi');
            $table->string('penerbit');
            $table->date('tanggal_terbit');
            $table->date('masa_berlaku');
            $table->string('nama_psjk');
            $table->string('sub_kualifikasi_bu');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bujkkontraktorsubs');
    }
};
