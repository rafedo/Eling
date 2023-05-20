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
        Schema::create('isi_materi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('judul_video');
            $table->string('deskripsi_video');
            $table->string('link_video');
            $table->string('sumber');
            $table->timestamps();

            $table->unsignedBigInteger('id_materi');

            // relasi dari tabel materi, setelan untuk database (mysql)
            $table->foreign('id_materi')->references('id')->on('materi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materi', function (Blueprint $table) {
            $table->dropForeign(['id_materi']);
        });
        Schema::dropIfExists('isi_materi');
    }
};
