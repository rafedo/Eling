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
        Schema::create('pengepuls', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('nama');
            $table->string('alamat');
            $table->string('ketersedian');
            $table->string('kontak');
            $table->unsignedBigInteger('id_galeri');
            $table->string('maps');
            $table->timestamps();

            $table->foreign('id_galeri')->references('id')->on('galeris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengepuls');
    }
};
