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
    Schema::create('pendaftar_mitra', function (Blueprint $table) {
    $table->id();
    $table->string('nama_lengkap');
    $table->string('nomor_whatsapp');
    $table->string('status_lokasi');
    $table->string('kota');
    $table->string('pulau');
    $table->json('source');
    $table->boolean('agreement')->default(false);
    $table->string('status')->default('baru');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftar_mitra');
    }
};
