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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id');
            $table->foreignId('kategori_id');
            $table->string('penulis');
            $table->string('judul_buku');
            $table->datetime('tanggal');
            $table->string('cover');
            $table->string('daftar_isi');
            $table->string('isi_buku');
            $table->text('sinopsis');
            $table->string('ukuran');
            $table->integer('jumlah_halaman');
            $table->integer('views');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
