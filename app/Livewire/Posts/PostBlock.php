<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class PostBlock extends Component
{
    public \App\Models\Post $post;
    public function render()
    {
        return view('livewire.posts.post-block');
    }
}
