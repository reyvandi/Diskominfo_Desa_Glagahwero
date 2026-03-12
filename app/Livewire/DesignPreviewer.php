<?php

namespace App\Livewire;

use Livewire\Component;

class DesignPreviewer extends Component
{
    public $selectedComponent = null;
    public $selectedDesign = null;
    public $showComponentDropdown = false;
    public $showDesignDropdown = false;

    public $components = [
        'heroslider' => 'Hero Slider',
        'aparatur'   => 'Aparatur Design',
    ];

    public $designs = [
        'heroslider' => [1,2,3],        // heroslider/design-1.blade.php
        'aparatur'   => [1, 2, 3],  // aparatur/aparatur-options-1,2,3.blade.php
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
        return view('livewire.design-previewer'); // ganti nama view
    }
}
