<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendaftarMitra extends Model
{
    protected $table = 'pendaftar_mitra';

    protected $fillable = [
        'nama_lengkap',
        'nomor_whatsapp',
        'status_lokasi',
        'kota',
        'pulau',
        'source',
        'agreement',
        'status',
    ];

    protected $casts = [
        'source' => 'array',
        'agreement' => 'boolean',
    ];

    public static function daftarStatus(): array
    {
        return [
            'baru' => 'Baru',
            'diproses' => 'Diproses',
            'diterima' => 'Diterima',
        ];
    }
}
