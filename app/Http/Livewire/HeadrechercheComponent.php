<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use Livewire\Component;

class HeadrechercheComponent extends Component
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
        return view('livewire.headrecherche-component', ['categorie'=>$categorie]);
    }
}
