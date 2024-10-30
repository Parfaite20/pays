<?php

namespace App\Http\Livewire\Auteur;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
class PostComponent extends Component
{

    //use WithPagination;
    //protected $paginationTheme = "bootstrap";

    public $post;

    public function mount()
    {
        $this->loadPoste();
    }

    public function loadPoste()
    {
        $this->post = Post::all();
    }

    public function publiched($id)
    {
        Post::where('id', $id)->update(['publie'=>true]);
        $this->loadPoste();

        return redirect()->to('/auteur/post'); 
    }

    public function render()
    {
        //$user = auth()->user();
        //$post = Post::all();
        //$users = Auth::user();
        $posts = Auth::user()->posts()->paginate(6);
        //$post = Post::all();
        return view('livewire.auteur.post-component', ['posts'=>$posts])->layout('layouts.templateUser');
    }
}
