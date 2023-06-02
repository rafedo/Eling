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
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('deskripsi_singkat');
            $table->longText('deskripsi_panjang');
            $table->string('tanggal');
            $table->string('link');
            $table->string('sumber');
            $table->string('foto');
            $table->timestamps();
            $table->unsignedBigInteger('id_kategori');

            // relasi dari tabel kategori, setelan untuk database (mysql)
            $table->foreign('id_kategori')->references('id')->on('kategori')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('artikel', function (Blueprint $table) {
            $table->dropForeign(['id_kategori']);
        });
        Schema::dropIfExists('artikel');
    }
};
