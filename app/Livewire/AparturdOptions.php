<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Aparatur;

class AparturdOptions extends Component
{
    public function render()
    {
        $aparatur = Aparatur::active()
            ->orderBy('urutan')
            ->get();

        return view('livewire.aparatur.aparatur-options2');
    }
}
