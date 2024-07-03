<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Search extends Component
{
    public string $search = '';

    protected $listeners = ['search'];

    public function search(): void
    {
        $this->emit('search', $this->search);
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.components.search');
    }
}

