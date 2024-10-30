<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Post;
use Livewire\Component;

class RechercheComponent extends Component
{

    public $recherche;
    public $post_cat;
    public $post_cat_id;

    public function mount()
    {
        $this->post_cat = 'Toute categorie';
        $this->fill(request()->only('recherche', 'post_cat', 'post_cat_id'));
    }

    public function render()
    {
        $categorie = Categorie::all();

        //$post = Post::where('name', 'like', '%'.$this->recherche .'%')->where('categorie_id', 'like', '%'.$this->post_cat_id.'%')->orderBy('created_at', 'desc')->paginate(8);
        $post = Post::where('titre', 'like', '%'.$this->recherche .'%')->orderBy('created_at', 'desc')->paginate(8);
        return view('livewire.recherche-component', ['categorie'=>$categorie], ['post'=>$post])->layout('layouts.template');
    }
}
