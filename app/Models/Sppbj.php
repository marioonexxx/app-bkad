<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sppbj extends Model
{
    use HasFactory;
    protected $table = 'sppbj';
    protected $fillable = [
        'spp_nomor',
        'spp_tgl',        
        'kontrak_nomor',
        'kontrak_tgl',
        'spmk_nomor',
        'spmk_tgl',
        'sppbj_nomor',
        'sppbj_tgl',
        'perusahaan_nama',
        'perusahaan_alamat',
        'perusahaan_bank',
        'perusahaan_rekening',        
        'kontrak_nilai',
        'keterangan',
        'waktu_pelaksanaan',
        'tgl_penyelesaian',
        'spm_nomor',
        'spm_tgl',
        'file_spp',
        'file_kontrak',
        'file_spmk',
        'file_sppbj',
        'file_bap',
        'file_ba_pemeriksaan',
        'file_lap_kemajuan',
        'file_dokumentasi',
        'file_spm',
        'file_rekening',
        'status',
        'notes',
        'opd_id',
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }
}
