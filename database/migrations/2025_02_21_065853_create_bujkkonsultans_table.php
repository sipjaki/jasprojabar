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
        Schema::create('bujkkonsultans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bujkkonsultansub_id');
            $table->string('namalengkap');
            $table->text('alamat');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('nib');
            $table->string('pju');
            $table->string('no_akte');
            $table->date('tanggal');
            $table->string('nama_notaris');
            $table->string('no_pengesahan');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bujkkonsultans');
    }
};
