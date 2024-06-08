<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class ShowPost extends Component
{

    #[\Livewire\Attributes\On('postCreated')]

    public function updateList($post)
    {
        //
    }

    public function placeholder()
    {
        return view('livewire.posts.placeholder');
    }
    public function render()
    {
        // sleep(3);
        $posts = \App\Models\Post::query()->with('user')->latest()->get();
        return view('livewire.posts.show-post', [
            'posts' => $posts
        ]);
    }
}
