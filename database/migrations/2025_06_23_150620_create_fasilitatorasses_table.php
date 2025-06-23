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
        Schema::create('fasilitatorasses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bantuanhibahbg_id')->nullable()->index();
            $table->foreignId('namafasilitator_id')->nullable()->index();
            $table->string('namalengkap')->nullable();
            // $table->string('NIP')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitatorasses');
    }
};
