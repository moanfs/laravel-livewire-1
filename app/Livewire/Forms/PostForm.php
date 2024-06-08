<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'min:3', 'string', 'max:120'])]
    public string $title = '';

    #[Rule('required')]
    public string $body = '';

    public function store()
    {
        // $user = Auth::user();
        // $validated = $this->validate();
        // $user->posts()->create($validated);

        $post = Auth::user()->posts()->create($this->validate());

        session()->flash('message', 'post created successfuly');
        $this->reset();

        return $post;
    }
}
