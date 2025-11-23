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
        Schema::create('action_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('action'); // create, update, delete, view, login, logout, etc
            $table->string('model_type')->nullable(); // Transaksi, Blog, User, LaporanIuran, etc
            $table->unsignedBigInteger('model_id')->nullable(); // ID dari model yang diubah
            $table->text('description'); // Deskripsi aksi
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->json('old_values')->nullable(); // Nilai lama (untuk update)
            $table->json('new_values')->nullable(); // Nilai baru (untuk update)
            $table->timestamps();

            // Index untuk performa query
            $table->index(['user_id', 'created_at']);
            $table->index(['model_type', 'model_id']);
            $table->index('action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('action_logs');
    }
};
