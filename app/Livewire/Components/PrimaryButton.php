<?php

namespace App\Livewire\Components;

use Livewire\Component;

class PrimaryButton extends Component
{
    public $href;
    public $label;

    public function mount($href, $label)
    {
        $this->href = $href;
        $this->label = $label;
    }

    public function render()
    {
        return view('livewire.components.primary-button', [
            'href' => $this->href,
            'label' => $this->label
        ]);
    }
}
