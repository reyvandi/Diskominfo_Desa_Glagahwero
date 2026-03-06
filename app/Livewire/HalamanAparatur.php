<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Aparatur;

class HalamanAparatur extends Component
{
    public $search = '';

    public function render()
    {
        $pimpinan = Aparatur::active()
            ->whereIn('jabatan', ['Kepala Desa', 'Sekretaris Desa'])
            ->orderBy('urutan')
            ->get();

        $perangkat = Aparatur::active()
            ->whereNotIn('jabatan', ['Kepala Desa', 'Sekretaris Desa'])
            ->when($this->search, fn($q) => $q->where('nama', 'like', '%' . $this->search . '%')
                                              ->orWhere('jabatan', 'like', '%' . $this->search . '%'))
            ->orderBy('urutan')
            ->get();

        return view('livewire.halaman-aparatur', compact('pimpinan', 'perangkat'));
    }
}
