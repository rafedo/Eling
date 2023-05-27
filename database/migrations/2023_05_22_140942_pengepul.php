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
        Schema::create('pengepul', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori');
            $table->string('alamat');
            $table->string('ketersediaan_hari');
            $table->string('ketersediaan_jam');
            $table->string('kontak');
            $table->string('maps');
            $table->timestamps();

            $table->unsignedBigInteger('id_galeri');
            // // relasi dari tabel galeri, setelan untuk database (mysql)
            $table->foreign('id_galeri')->references('id')->on('galeri')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengepul', function (Blueprint $table) {
            $table->dropForeign(['id_galeri']);
        });
        Schema::dropIfExists('pengepul');
    }
};
