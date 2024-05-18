<?php

namespace App\Livewire;

use App\Livewire\Partials\Breadcrumb;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }
}
