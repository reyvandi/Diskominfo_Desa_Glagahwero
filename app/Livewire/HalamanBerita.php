<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Berita;

class HalamanBerita extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 9;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $berita = Berita::published()
            ->when($this->search, fn($q) => $q->where('judul', 'like', '%' . $this->search . '%'))
            ->latest('published_at')
            ->paginate($this->perPage);

        return view('livewire.halaman-berita', compact('berita'));
    }
}
