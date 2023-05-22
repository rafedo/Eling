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
        Schema::table('materivideos', function (Blueprint $table) {
            $table->foreign('id_kategori')
                  ->references('id')
                  ->on('kategoris')
                  ->onUpdate('restrict')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materivideos', function (Blueprint $table) {
            $table->dropForeign('materivideos_id_kategori_foreign');
        });
    }
};
