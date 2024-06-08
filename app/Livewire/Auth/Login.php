<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.guest')]
class Login extends Component
{
    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required', 'min:3'])]
    public string $password = '';

    public function login()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->route('/');
        }

        throw \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'the provided credentials do not match our record',
        ]);
        // if (Auth::attempt($this->only('email', 'password'))) {
        //     return redirect()->route('/');
        // }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
