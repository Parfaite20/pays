<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        //$post = Post::orderBy('created_at', 'desc')->paginate(12);
        $po = Post::orderBy('created_at', 'desc')->paginate(6);
        $post = Post::paginate(6);
        return view('livewire.home-component', ['po'=>$po], ['post'=>$post])->layout('layouts.template');
    }
}
