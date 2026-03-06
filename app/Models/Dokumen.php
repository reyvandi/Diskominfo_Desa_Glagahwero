<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $table = 'dokumens';

    protected $fillable = [
        'judul',
        'kategori',
        'sub_kategori',
        'deskripsi',
        'file',
        'ukuran',
        'urutan',
        'tanggal',
        'is_active',
    ];

    protected $casts = [
        'tanggal'   => 'date',
        'is_active' => 'boolean',
    ];

    // Scope hanya dokumen aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope filter kategori
    public function scopeKategori($query, $kategori)
    {
        if ($kategori && $kategori !== 'semua') {
            return $query->where('kategori', $kategori);
        }
        return $query;
    }
}
