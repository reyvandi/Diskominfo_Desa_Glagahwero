<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Dokumen as DokumenModel;

class Dokumen extends Component
{
    use WithPagination;

    public $aktifKategori = 'semua';

    public $kategoris = [
        'semua'     => 'Semua',
        'apbdes'    => 'APBDes',
        'keuangan'  => 'Keuangan',
        'peraturan' => 'Peraturan Desa',
        'perizinan' => 'Perizinan',
    ];

    // Reset pagination saat ganti kategori
    public function switchKategori($kategori)
    {
        $this->aktifKategori = $kategori;
        $this->resetPage();
    }

    public function render()
    {
        $query = DokumenModel::where('is_active', true)
            ->orderBy('urutan')
            ->orderByDesc('tanggal');

        if ($this->aktifKategori !== 'semua') {
            $query->where('kategori', $this->aktifKategori);
        }

        $dokumens   = $query->paginate(9);

        $stats = [
            'total'     => DokumenModel::where('is_active', true)->count(),
            'keuangan'  => DokumenModel::where('is_active', true)->where('kategori', 'keuangan')->count(),
            'peraturan' => DokumenModel::where('is_active', true)->where('kategori', 'peraturan')->count(),
            'perizinan' => DokumenModel::where('is_active', true)->where('kategori', 'perizinan')->count(),
        ];

        return view('livewire.dokumen', compact('dokumens', 'stats'));
    }
}
