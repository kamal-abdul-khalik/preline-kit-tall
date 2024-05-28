<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]
class PostIndex extends Component
{
    public function render()
    {
        return view('livewire.posts.post-index');
    }
}
