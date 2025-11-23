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
        Schema::table('checklist_iurans', function (Blueprint $table) {
            // Ubah semua boolean menjadi decimal untuk menyimpan nominal
            $table->decimal('januari', 15, 2)->default(0)->change();
            $table->decimal('februari', 15, 2)->default(0)->change();
            $table->decimal('maret', 15, 2)->default(0)->change();
            $table->decimal('april', 15, 2)->default(0)->change();
            $table->decimal('mei', 15, 2)->default(0)->change();
            $table->decimal('juni', 15, 2)->default(0)->change();
            $table->decimal('juli', 15, 2)->default(0)->change();
            $table->decimal('agustus', 15, 2)->default(0)->change();
            $table->decimal('september', 15, 2)->default(0)->change();
            $table->decimal('oktober', 15, 2)->default(0)->change();
            $table->decimal('november', 15, 2)->default(0)->change();
            $table->decimal('desember', 15, 2)->default(0)->change();
            $table->decimal('thr', 15, 2)->default(0)->change();
            $table->decimal('sosial', 15, 2)->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('checklist_iurans', function (Blueprint $table) {
            // Kembalikan ke boolean
            $table->boolean('januari')->default(false)->change();
            $table->boolean('februari')->default(false)->change();
            $table->boolean('maret')->default(false)->change();
            $table->boolean('april')->default(false)->change();
            $table->boolean('mei')->default(false)->change();
            $table->boolean('juni')->default(false)->change();
            $table->boolean('juli')->default(false)->change();
            $table->boolean('agustus')->default(false)->change();
            $table->boolean('september')->default(false)->change();
            $table->boolean('oktober')->default(false)->change();
            $table->boolean('november')->default(false)->change();
            $table->boolean('desember')->default(false)->change();
            $table->boolean('thr')->default(false)->change();
            $table->boolean('sosial')->default(false)->change();
        });
    }
};
