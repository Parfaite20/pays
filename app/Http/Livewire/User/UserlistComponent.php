<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserlistComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";
    

    public function render()
    {
        $user = User::paginate(5);
        return view('livewire.user.userlist-component', ['user'=>$user])->layout('layouts.templateUser');
    }
}
