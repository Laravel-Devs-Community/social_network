<?php

namespace App\Http\Livewire\Notifications;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.notifications.index')->layout('layouts.main');
    }
}
