<?php

namespace App\Http\Livewire\Friends;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Index extends Component
{
    public $invite_email;
    // public $showToast = false;
    // public $toastMessage='mensaje';

    public function mount()
    {
        $this->invite_email = '';
        // $this->showToast = false;
    }

    public function render()
    {   
        return view('livewire.friends.index')->layout('layouts.main');
    }

    public function invite()
    {
        $this->validate([
            'invite_email' => 'required|email'
        ]);
        // $this->emit('inviteFriend', $this->invite_email);
        // Mail::to($this->emainvite_emailil)->send(new SendEmail($this->invite_email));
        
        session()->flash('success', 'El correo electrónico se envió correctamente.');

        // // Muestra un mensaje de éxito
        // $this->showToast = true;
        // $this->toastMessage = 'La invitación se envió correctamente a ' . $this->invite_email ;
        
        // // Restablece el campo de correo electrónico después de enviar el correo
        // $this->invite_email = '';
    }
}
