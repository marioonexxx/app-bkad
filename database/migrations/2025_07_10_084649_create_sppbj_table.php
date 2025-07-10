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
        Schema::create('sppbj', function (Blueprint $table) {
            
            $table->id();
            $table->string('nomor')->nullable();
            $table->string('kontrak_nomor')->nullable();
            $table->date('kontrak_tgl')->nullable();
            $table->string('spmk_nomor')->nullable();
            $table->date('spmk_tgl')->nullable();
            $table->string('sppbj_nomor')->nullable();
            $table->date('sppbj_tgl')->nullable();
            $table->string('perusahaan_nama')->nullable();
            $table->text('perusahaan_alamat')->nullable();
            $table->string('perusahaan_bank')->nullable();
            $table->decimal('kontrak_nilai', 20, 2)->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('waktu_pelaksanaan')->nullable(); // dalam hari, asumsi
            $table->date('tgl_penyelesaian')->nullable(); 
            // File uploads
            $table->string('file_kontrak')->nullable();
            $table->string('file_spmk')->nullable();
            $table->string('file_sppbj')->nullable();
            $table->string('file_bap')->nullable();
            $table->string('file_ba_pemeriksaan')->nullable();
            $table->string('file_lap_kemajuan')->nullable();
            $table->string('file_dokumentasi')->nullable();
            $table->string('status')->nullable(); // status proses
            $table->string('notes')->nullable(); // untuk catatan revisi

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sppbj');
    }
};
