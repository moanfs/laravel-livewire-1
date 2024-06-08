<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Title;
use Livewire\Component;

// #[Title('Post')]
class CreatePost extends Component
{
    public \App\Livewire\Forms\PostForm $form;

    public function save()
    {
        $post = $this->form->store();

        $this->dispatch('postCreated', $post->id);
    }

    public function render()
    {
        return view('livewire.posts.create-post');
    }
}
