<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Post;
use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {

        $categorie = Categorie::all();

        $po = Post::orderBy('created_at', 'desc')->paginate(9);
        return view('livewire.blog-component', ['categorie'=>$categorie], ['po'=>$po])->layout('layouts.template');
    }
}
