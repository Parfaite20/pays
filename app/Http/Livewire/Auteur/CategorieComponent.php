<?php

namespace App\Http\Livewire\Auteur;

use App\Models\Categorie;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategorieComponent extends Component
{

    //use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $name;
    public $search = "";
    public $newValue = "";
    /*public $newCategorie = "";

    public $ajoutcate = false;

    public function showCate()
    {
        if ($this->ajoutcate) {
            $this->ajoutcate = false;
        }

        $this->ajoutcate = true;
    }*/

    public function storeCategorie()
    {

        $this->validate([
            'name' => 'required|unique:categories',
        ]);

        $categorie = new Categorie();
        $categorie->name = $this->name;
        $categorie->save();
        //session()->flash('Categorie créée avec succès');
        $this->dispatchBrowserEvent("showMessage", ["message"=>"Ajout éffectué avec succès"]);

        return redirect()->to('/auteur/categorie');

    }

    public function editCategorie($id)
    {
        $categorie = Categorie::find($id);

        $this->dispatchBrowserEvent("showEditForm", ["categorie"=>$categorie]);
    }

    public function updateCategorie($id, $newVa)
    {
        $this->newValue = $newVa;
        $validated = $this->validate([
            'newValue' => ["required", Rule::unique("categories", "name")->ignore($id)]
        ]);

        Categorie::find($id)->update(["name"=>$validated["newValue"]]);

        $this->dispatchBrowserEvent("showMessage", ["message"=>"Mise à jour effectuée avec succès"]);

        return redirect()->to('/auteur/categorie');

    }

    public function confirmDelete($name, $id)
    {

        $this->dispatchBrowserEvent("showMessagedelete", ["message"=>[
            "text" => "Voulez-vous supprimer la categorie $name ?",
            "title" => "Etes-vous sûr ?",
            "type" => "warning",
            "data" => ["categorie_id" => $id]
        ]]);

        /*$categorie = Categorie::find($id);
        $categorie->delete();*/

    }

    public function deleteCategorie(Categorie $categorie)
    {
        $categorie->delete();
        $this->dispatchBrowserEvent("showMessage", ["message"=>"Categorie supprimée avec succès"]);

        return redirect()->to('/auteur/categorie');
    }

   



    public function render()
    {
        /*$searchCri = "%".$this->search."%";
        $this->emitself('refresh-me');
        $categorie = Categorie::where("name", "like", $searchCri)->paginate(3);*/

        $categorie = Categorie::all();
        return view('livewire.auteur.categorie-component', ['categorie'=>$categorie])->layout('layouts.templateUser');
    }
}
