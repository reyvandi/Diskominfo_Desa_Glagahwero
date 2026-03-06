<?php

namespace App\Livewire;

use Livewire\Component;

class BeritaDesa extends Component
{
    public function render()
    {
        $berita = collect(range(1, 4))->map(fn($i) => (object)[
            'judul'     => 'Judul Berita ' . $i,
            'ringkasan' => 'Ringkasan singkat berita desa...',
            'foto'      => 'images/news.jpg',
            'slug'      => '#',
        ]);

        return view('livewire.berita-desa', compact('berita'));
    }
}
