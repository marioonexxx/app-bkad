<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sppbj extends Model
{
    use HasFactory;
    protected $table = 'sppbj';
    protected $fillable = [
        'nomor',
        'kontrak_nomor',
        'kontrak_tgl',
        'spmk_nomor',
        'spmk_tgl',
        'sppbj_nomor',
        'sppbj_tgl',
        'perusahaan_nama',
        'perusahaan_alamat',
        'perusahaan_bank',
        'kontrak_nilai',
        'keterangan',
        'waktu_pelaksanaan',
        'tgl_penyelesaian',
        'file_kontrak',
        'file_spmk',
        'file_sppbj',
        'file_bap',
        'file_ba_pemeriksaan',
        'file_lap_kemajuan',
        'file_dokumentasi',
        'status',
        'notes',
        'spm_nomor',
        'spm_tgl',
        'file_spm',
        'opd_id',
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }
}
