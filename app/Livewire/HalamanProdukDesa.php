<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ProdukDesa as ProdukDesaModel;

class HalamanProdukDesa extends Component
{
    use WithPagination;

    public $search = '';
    public $kategori = '';
    public $perPage = 9;

    public $kategoriList = [
        ''        => 'Semua Kategori',
        'umkm'    => 'UMKM',
        'wisata'  => 'Tempat Wisata',
        'pakaian' => 'Pakaian Daerah',
        'makanan' => 'Makanan Khas',
        'adat'    => 'Adat Istiadat',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingKategori()
    {
        $this->resetPage();
    }

    public function render()
    {
        $produk = ProdukDesaModel::active()
            ->when($this->kategori, fn($q) => $q->where('kategori', $this->kategori))
            ->when($this->search, fn($q) => $q->where('nama', 'like', '%' . $this->search . '%'))
            ->orderBy('urutan')
            ->paginate($this->perPage);

        return view('livewire.halaman-produk-desa', compact('produk'));
    }
}
