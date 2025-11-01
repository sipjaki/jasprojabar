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
     Schema::create('subtransaksis', function (Blueprint $table) {
    $table->id();
    $table->foreignId('akunpengguna_id')->nullable();
    $table->foreignId('transaksi_id')->nullable();
    $table->foreignId('jenistransaksi_id')->nullable();
    // $table->string('sub_transaksi');
    $table->date('tanggal_transaksi')->nullable();
    $table->string('cadangan1')->nullable();
    $table->string('cadangan2')->nullable();

    $table->timestamps();
    $table->softDeletes(); // 🧩 untuk fitur soft delete
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subtransaksis');
    }
};
