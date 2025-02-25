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
        Schema::create('prosespaketkonsultasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profilpaketkonsultasi_id');
            $table->string('persiapan');
            $table->string('pengadaan');
            $table->string('pelaksanaan');
            $table->string('pemeliharaan');
            $table->string('paketselesai');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prosespaketkonsultasis');
    }
};
