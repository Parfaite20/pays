<?php

namespace App\Http\Livewire\Auteur;

use App\Models\Categorie;
use Livewire\Component;
use Illuminate\Support\Str;

class EditcategorieComponent extends Component
{
 
    public $categorie_slug;
    public $categorie_id;
    public $name;
    /*public $slug;
    public $content;*/

    public function mount($categorie_slug)
    {
        $this->categorie_slug = $categorie_slug;
        $categorie = Categorie::where('id', $categorie_slug)->first();
        $this->categorie_id = $categorie->id;
        $this->name = $categorie->name;
        /*$this->slug = $categorie->slug; 
        $this->content = $categorie->content;*/

    }

    /*public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }*/

    public function updateCategorie()
    {
        $categorie = Categorie::find($this->categorie_id);
        $categorie->name = $this->name;
        /*$categorie->slug = $this->slug;
        $categorie->content = $this->content;*/
        $categorie->save();
    }

    public function render()
    {   
        $categorie = Categorie::all();
        return view('livewire.auteur.editcategorie-component', ['categorie'=>$categorie])->layout('layouts.templateUser');
    }
}
