<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $fillable = [
        'kategori_id',
        'judul_pengaduan',
        'isi_laporan',
        'nama_pelapor',
        'nomor_telepon',
        'status'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriPengaduan::class, 'kategori_id');
    }
}