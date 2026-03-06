<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProfilDesa;

class HalamanProfil extends Component
{
    public function render()
    {
        $profil = ProfilDesa::first();

        return view('livewire.halaman-profil', compact('profil'));
    }
}
