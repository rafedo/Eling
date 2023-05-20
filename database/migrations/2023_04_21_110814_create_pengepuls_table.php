<!-- STATUS AMAN -->
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
            $table->string('judul');
            $table->string('deskripsi_singkat');
            $table->string('alamat');
            $table->string('ketersedian_hari');
            $table->string('ketersediaan_jam');
            $table->string('kontak');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('maps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengepul');
    }
};
