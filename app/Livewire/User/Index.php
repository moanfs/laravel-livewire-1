<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;


class Index extends Component
{
    use \Livewire\WithPagination;
    public function render()
    {
        $users = User::query()->latest()->paginate(10);
        return view('livewire.user.index', compact('users'));
    }
}
