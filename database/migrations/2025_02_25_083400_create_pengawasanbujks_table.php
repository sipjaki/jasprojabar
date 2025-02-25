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
            $table->string('alamatperusahaan');
            $table->string('statusmodal');
            $table->string('jenisperusahaan');
            $table->string('nib');
            $table->string('kbli');
            $table->string('uraiankbli');
            $table->string('sektor');
            $table->string('alamatproyek');
            $table->string('wilayah');
            $table->string('luastanah');
            $table->string('tki_lakilaki');
            $table->string('tki_perempuan');
            $table->string('tka_lakilaki');
            $table->string('tka_perempuan');
            $table->string('resiko');
            $table->string('sumberdata');
            $table->string('investasi');
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
