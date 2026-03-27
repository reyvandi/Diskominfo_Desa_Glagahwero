<?php

namespace App\Livewire;

use Livewire\Component;

class DesignPreviewer extends Component
{
    public $selectedComponent = null;
    public $selectedDesign = null;
    public $showComponentDropdown = false;
    public $showDesignDropdown = false;

    public $previewTab = 'umkm';

    public $previewTabs = [
        'umkm'    => 'UMKM',
        'wisata'  => 'Tempat Wisata',
        'pakaian' => 'Pakaian Daerah',
        'makanan' => 'Makanan Khas',
        'adat'    => 'Adat Istiadat',
    ];

    public function switchProdukTab($tab)
    {
        $this->previewTab = $tab;
    }

    public $components = [
        'heroslider' => 'Hero Slider',
        'aparatur'   => 'Aparatur Design',
        'produk'     => 'Produk Desa',  // tambah ini
    ];

    public $designs = [
        'heroslider' => [1, 2, 3],
        'aparatur'   => [1, 2, 3],
        'produk'     => [1, 2, 3, 4],  // tambah ini
    ];

    // method toggleDropdown lama → pecah jadi 2
    public function toggleComponentDropdown()
    {
        $this->showComponentDropdown = !$this->showComponentDropdown;
        $this->showDesignDropdown = false;
    }

    public function toggleDesignDropdown()
    {
        $this->showDesignDropdown = !$this->showDesignDropdown;
        $this->showComponentDropdown = false;
    }

    public function selectComponent($key)
    {
        $this->selectedComponent = $key;
        $this->selectedDesign = null;
        $this->showComponentDropdown = false;
    }

    public function selectDesign($num)
    {
        $this->selectedDesign = $num;
        $this->showDesignDropdown = false;
    }

    public function render()
    {
        $previewProduk = \App\Models\ProdukDesa::where('kategori', $this->previewTab)
            ->orderBy('urutan')
            ->get();

        return view('livewire.design-previewer', compact('previewProduk'));
    }
}
