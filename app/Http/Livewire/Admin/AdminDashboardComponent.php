<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class AdminDashboardComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $slug;
    public $name;
    public $email;
    public $password;
    public $utype;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storeCategorie()
    {
        $categorie = new User();
        $categorie->name = $this->name;
        $categorie->email = $this->email;
        $categorie->password = $this->password;
        $categorie->utype = $this->utype;
        $categorie->save();
        session()->flash('User créé avec succès');
    }

    public function render()
    {
        $user = User::paginate(5);
        return view('livewire.admin.admin-dashboard-component', ['user'=>$user])->layout('layouts.templateUser');
    }
}
