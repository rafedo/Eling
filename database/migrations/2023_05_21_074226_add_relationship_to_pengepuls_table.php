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
        Schema::table('pengepuls', function (Blueprint $table) {
            $table->foreign('id_galeri')
                ->references('id')
                ->on('galeris')
                ->onUpdate('restrict')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengepuls', function (Blueprint $table) {
            $table->dropForeign('pengepuls_id_galeri_foreign');

        });
    }
};
