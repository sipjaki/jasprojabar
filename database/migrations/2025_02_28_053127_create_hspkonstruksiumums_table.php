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
        Schema::create('hspkonstruksiumums', function (Blueprint $table) {
            $table->id();
            $table->string('hspdivisi_id')->nullable();
            // $table->string('hsppaket_id')->nullable();
            // $table->string('hspkodepekerjaan_id')->nullable();
            $table->string('kode')->nullable();
            $table->string('jenispekerjaan')->nullable();
            $table->string('hargasatuan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hspkonstruksiumums');
    }
};
