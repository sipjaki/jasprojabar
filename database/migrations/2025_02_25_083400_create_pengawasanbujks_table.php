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
        Schema::create('pengawasanbujks', function (Blueprint $table) {
            $table->id();
            $table->string('kodeproyek');
            $table->string('namaperusahaan');
            $table->text('alamatperusahaan');  // Menggunakan text karena alamat bisa lebih panjang
            $table->string('statusmodal');
            $table->string('jenisperusahaan');
            $table->string('nib');
            $table->string('kbli');
            $table->text('uraiankbli');  // Menggunakan text jika deskripsi lebih panjang
            $table->string('sektor');
            $table->string('alamatproyek');
            $table->string('wilayah');
            $table->decimal('luastanah', 10, 2);  // Menggunakan decimal untuk luas tanah (dengan 2 desimal)
            $table->integer('tki_lakilaki')->default(0);  // Menggunakan integer untuk jumlah
            $table->integer('tki_perempuan')->default(0);
            $table->integer('tka_lakilaki')->default(0);
            $table->integer('tka_perempuan')->default(0);
            $table->string('resiko');
            $table->string('sumberdata');
            $table->decimal('investasi', 15, 2);  // Menggunakan decimal untuk nilai investasi (dengan 2 desimal)
            $table->string('skalausahaperusahaan');
            $table->string('skalausahaproyek');
            $table->string('kewenangankoordinator');
            $table->string('kewenanganpengawas');
            $table->string('PSN');
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengawasanbujks');
    }
};
