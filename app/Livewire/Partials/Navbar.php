<?php

namespace App\Livewire\Partials;

use App\Livewire\Actions\Logout;
use Livewire\Component;

class Navbar extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
