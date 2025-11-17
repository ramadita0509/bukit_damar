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
        Schema::create('laporan_iurans', function (Blueprint $table) {
            $table->id();
            $table->string('bulan')->nullable();
            $table->string('tahun');
            $table->string('nama_file');
            $table->string('path_file');
            $table->string('judul')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_iurans');
    }
};
