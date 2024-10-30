<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;

class UserDashboardComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public function render()
    {
        return view('livewire.user.user-dashboard-component')->layout('layouts.templateUser');
    }
}
