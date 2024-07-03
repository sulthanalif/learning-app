<?php

namespace App\Livewire\Components;

use Livewire\Component;

class NavLink extends Component
{
    public $slot;
    public $href;
    public $isActive;

    public function mount($slot, $href, $isActive = false)
    {
        $this->slot = $slot;
        $this->href = $href;
        $this->isActive = $isActive;
    }
    public function render()
    {
        return view('livewire.components.nav-link', [
            'slot' => $this->slot,
            'href' => $this->href,
            'isActive' => $this->isActive
        ]);
    }
}
