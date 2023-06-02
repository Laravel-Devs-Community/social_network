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

    protected function init() {
        $this->posts = Post::deMiFeed()->orderBy('created_at','desc')->get();
    }
    public function mount() {
        $this->post = New Post;
        $this->init() ;
    }

    public function render()
    {
        return view('livewire.posts.index');
    }

    public function save() {
        $this->validate([
            'text' => 'required_without:image',
            'image' => 'required_without:text'
        ]);
        if( $this->image ) {
            $this->validate([
                'image' => 'image|max:2048'
            ]); 
        }
        $valores['text'] = $this->text;
        if( $this->image ) {
            $valores['photo'] = Storage::put( 'posts', $this->image );
        }        
        $this->post->create( $valores );
        $this->reset('text','image');
        $this->init() ;
        // $this->posts = Post::deMiFeed()->orderBy('created_at','desc')->get();
    }

}
