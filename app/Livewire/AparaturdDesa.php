<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Aparatur;

class AparaturdDesa extends Component
{
    public function render()
    {
        $aparatur = Aparatur::active()
            ->orderBy('urutan')
            ->get();

        return view('livewire.aparaturd-desa', compact('aparatur'));
    }
}
