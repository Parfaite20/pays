<?php

namespace App\Http\Livewire\Auteur;

use App\Models\Post;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class AuteurDashboardComponent extends Component
{


    public function render()
    {
        //$users = Auth::user();
        $posts = Auth::user()->posts;
        return view('livewire.auteur.auteur-dashboard-component', ['posts'=>$posts])->layout('layouts.templateUser');
    }
}
