<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProdukDesa as ProdukDesaModel;

class ProdukDesa extends Component
{
    public $aktifTab = 'umkm';

    public $tabs = [
        'umkm'    => 'UMKM',
        'wisata'  => 'Tempat Wisata',
        'pakaian' => 'Pakaian Daerah',
        'makanan' => 'Makanan Khas',
        'adat'    => 'Adat Istiadat',
    ];

    public function switchTab($tab)
    {
        $this->aktifTab = $tab;
    }

    public function render()
    {
        $produk = ProdukDesaModel::active()
            ->kategori($this->aktifTab)
            ->orderBy('urutan')
            ->get();

        return view('livewire.produk-desa', compact('produk'));
    }
}
