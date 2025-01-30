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
        Schema::create('tertibjakons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('statustertibjakon_id');
            $table->string('namabadanusaha');
            $table->string('nib');
            $table->string('pjbu');
            // Kesesuaian Kegiatan Konstruksi 
            $table->string('jenis');
            $table->string('sifat');
            $table->string('klasifikasi');
            $table->string('layanan');
            // Kesesuaian Kegiatan Usaha Jasa Konstruksi dan Segmentasi Pasar  
            $table->string('bentuk');
            $table->string('kualifikasi');
            // Pemenuhan Persyaratan Usaha   
            $table->string('sbu');
            $table->string('nib');
            // Pelaksanaan Pengambangan 
            $table->string('statustertibjakon');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tertibjakons');
    }
};
