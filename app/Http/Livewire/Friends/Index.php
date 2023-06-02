<?php

namespace App\Http\Livewire\Friends;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.friends.index')->layout('layouts.main');
    }
}
