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
        Schema::create('rantaipasokbloras', function (Blueprint $table) {
            $table->id();
            $table->string('distributor');
            $table->string('nib');
            $table->string('alamat');
            $table->string('notelepon');
            $table->string('materialproduk');
            $table->string('submaterialproduk');
            $table->string('merkproduk');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rantaipasokbloras');
    }
};
