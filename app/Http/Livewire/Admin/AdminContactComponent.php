<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class AdminContactComponent extends Component
{
    public function render()
    {
        $cont = Contact::all();
        return view('livewire.admin.admin-contact-component', ['cont'=>$cont])->layout('layouts.templateUser');
    }
}
