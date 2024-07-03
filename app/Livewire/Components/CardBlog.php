<?php

namespace App\Livewire\Components;

use Livewire\Component;

class CardBlog extends Component
{
    public $post = [];

    public function mount($post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.components.card-blog', [
            'post' => $this->post
        ]);
    }
}
