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
            $table->string('spp_nomor')->nullable();
            $table->date('spp_tgl')->nullable();            
            $table->string('kontrak_nomor')->nullable();
            $table->date('kontrak_tgl')->nullable();
            $table->string('spmk_nomor')->nullable();
            $table->date('spmk_tgl')->nullable();            
            $table->string('sppbj_nomor')->nullable();
            $table->date('sppbj_tgl')->nullable();
            $table->string('perusahaan_nama')->nullable();
            $table->text('perusahaan_alamat')->nullable();
            $table->string('perusahaan_bank')->nullable();
            $table->string('perusahaan_rekening')->nullable();           
            $table->decimal('kontrak_nilai', 20, 2)->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('waktu_pelaksanaan')->nullable(); // dalam hari, asumsi
            $table->date('tgl_penyelesaian')->nullable(); 
            //SPM
            $table->string('spm_nomor')->nullable();
            $table->date('spm_tgl')->nullable();
            
            // File uploads            
            $table->string('file_spp')->nullable();
            $table->string('file_kontrak')->nullable();
            $table->string('file_spmk')->nullable();
            $table->string('file_sppbj')->nullable();
            $table->string('file_bap')->nullable();
            $table->string('file_ba_pemeriksaan')->nullable();
            $table->string('file_lap_kemajuan')->nullable();
            $table->string('file_dokumentasi')->nullable();
            $table->string('file_spm')->nullable();
            $table->string('file_rekening')->nullable();

            //  Revisi
            $table->string('status')->nullable()->comment('1 = Verifikasi PPK 2 = Verifikator BKAD 3 = Verifikasi Kuasa BUD 4 = SP2D Terbit 5 = Revisi Usulan'); // status proses
            $table->string('notes')->nullable(); // untuk catatan revisi          
            
            $table->foreignId('opd_id')->nullable()->constrained('opd')->onDelete('set null');
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
