<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;

class Index extends Component
{
    public $posts = [1,2] ;

    public function render()
    {
        return view('livewire.posts.index');
    }
}
