<?php

namespace App\Livewire;

use Livewire\Component;

class HeroSliderPicker extends Component
{
    public $selectedDesign = null;
    public $showDropdown = false;

    public function selectDesign($design)
    {
        $this->selectedDesign = $design;
        $this->showDropdown = false;
    }

    public function toggleDropdown()
    {
        $this->showDropdown = !$this->showDropdown;
    }

    public function render()
    {
        return view('livewire.hero-slider-picker');
    }
}
