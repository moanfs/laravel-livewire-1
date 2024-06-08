<?php

namespace App\Livewire\User;

use Livewire\Component;

class ShowUser extends Component
{
    public $title;

    public \App\Models\User $user;

    public function render()
    {
        return view('livewire.user.show-user');
    }
}
