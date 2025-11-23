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
        Schema::create('checklist_iurans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->year('tahun');
            $table->decimal('januari', 15, 2)->default(0);
            $table->decimal('februari', 15, 2)->default(0);
            $table->decimal('maret', 15, 2)->default(0);
            $table->decimal('april', 15, 2)->default(0);
            $table->decimal('mei', 15, 2)->default(0);
            $table->decimal('juni', 15, 2)->default(0);
            $table->decimal('juli', 15, 2)->default(0);
            $table->decimal('agustus', 15, 2)->default(0);
            $table->decimal('september', 15, 2)->default(0);
            $table->decimal('oktober', 15, 2)->default(0);
            $table->decimal('november', 15, 2)->default(0);
            $table->decimal('desember', 15, 2)->default(0);
            $table->decimal('thr', 15, 2)->default(0);
            $table->decimal('sosial', 15, 2)->default(0);
            $table->timestamps();

            // Unique constraint: satu user hanya punya satu record per tahun
            $table->unique(['user_id', 'tahun']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checklist_iurans');
    }
};
