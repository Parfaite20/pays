<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{

    public $name;
    public $email;
    public $comment;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);

        $cont = new Contact();
        $cont->name = $this->name;
        $cont->email = $this->email;
        $cont->comment = $this->comment;
        $cont->save();

        //session()->flash('message', 'Merci, votre message a été envoyé avec succès');

        return redirect()->to('/contact-us')->with('message', 'Merci, votre message a été envoyé avec succès');
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.template');
    }
}
