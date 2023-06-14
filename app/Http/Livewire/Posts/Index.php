<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads ;

    public $posts = [] ;
    public $post ;
    public $text ;
    public $image ;

    // https://www.youtube.com/watch?v=WvVTYEC8FAQ

    protected function init() {
        $this->posts = Post::deMiFeed()->orderBy('created_at','desc')->get();
    }
    public function mount() {
        $this->post = New Post;
        $this->init() ;
    }

    public function render()
    {
        return view('livewire.posts.index')->layout('layouts.main');
    }

    public function save() {
        // rate limit
        $this->validate([
            'text' => 'required_without:image',
            'image' => 'required_without:text'
        ]);
        if( $this->image ) {
            $this->validate([
                'image' => 'image|max:1024'
            ]); 
        }
        // intervention/image
        $valores['text'] = $this->text;
        if( $this->image ) {
            $valores['photo'] = Storage::put( 'posts', $this->image );
        }        
        $this->post->create( $valores );
        $this->reset('text','image');
        $this->init() ;
    }

}
