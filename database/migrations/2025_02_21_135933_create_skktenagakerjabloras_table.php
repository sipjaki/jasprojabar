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
        Schema::create('skktenagakerjabloras', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->text('alamat');
            $table->foreignId('namasekolah_id');
            $table->foreignId('jenjangpendidikan_id');
            $table->foreignId('jurusan_id');
            $table->string('tahunlulus');
            $table->foreignId('jabatankerja_id');
            $table->foreignId('jenjang_id');
            $table->foreignId('lpspenerbit_id');
            $table->date('tanggalterbit');
            $table->date('tanggalhabis');
            $table->enum('statusterbit', ['TERBIT', 'DALAM PROSES']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skktenagakerjabloras');
    }
};
