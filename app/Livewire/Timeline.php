<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Post')]
class Timeline extends Component
{
    public function render()
    {
        return view('livewire.timeline');
    }
}
