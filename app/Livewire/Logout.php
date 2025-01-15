<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        # code...
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect()->intended(route('login'));

    }
    public function render()
    {
        return view('livewire.logout');
    }
}
