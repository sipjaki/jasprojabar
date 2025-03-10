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
        Schema::create('satuanhargaupahtenagakerjas', function (Blueprint $table) {
            $table->id();
            $table->string('uraian')->nullable();
            $table->string('kode')->nullable();
            $table->string('satuan')->nullable();
            $table->float('besaran')->nullable();
            $table->float('besaranperjam')->nullable();
            // $table->string('keterangan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('satuanhargaupahtenagakerjas');
    }
};
