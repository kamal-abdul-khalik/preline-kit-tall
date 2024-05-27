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
        $options = [
            ['value' => 'name', 'label' => 'Name'],
            ['value' => 'email', 'label' => 'Email address'],
            ['value' => 'description', 'label' => 'Description'],
            ['value' => 'user_id', 'label' => 'User ID'],
            ['value' => 100, 'label' => 'Kamal'],
        ];
        return view('livewire.dashboard', compact('options'));
    }
}
