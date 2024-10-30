<?php

namespace App\Http\Livewire;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditprofileComponent extends Component
{

    public $moile1;
    public $moile2;
    public $pays;
    public $ville;
    public $adresse;
    public $name;
    public $email;
    public $utype;

    public $profile_id;
    //public $profile_slug;

    public function mount($profile_id=null)
    {
        if ($profile_id) {
            $this->$profile_id = $profile_id;
            $user = User::where('id', $profile_id)->first();
            $this->$profile_id = $user->id;
            $this->mobile1 = $user->profile->mobile1;
            $this->mobile2 = $user->profile->mobile2;
            $this->pays = $user->profile->pays;
            $this->ville = $user->profile->ville;
            $this->adresse = $user->profile->adresse;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->utype = $user->utype;
        }
        else {
            $user = User::find(Auth::user()->id);
            $this->mobile1 = $user->profile->mobile1;
            $this->mobile2 = $user->profile->mobile2;
            $this->pays = $user->profile->pays;
            $this->ville = $user->profile->ville;
            $this->adresse = $user->profile->adresse;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->utype = $user->utype;
        }
        
    }

    public function updateProfile()
    {

        if ($this->profile_id) {

            $profile = Profile::find($this->profile_id);
            $profile->mobile1 = $this->mobile1;
            $profile->mobile2 = $this->mobile2;
            $profile->pays = $this->pays;
            $profile->ville = $this->ville;
            $profile->adresse = $this->adresse;
            $profile->complet_profil = true;
            $profile->save();

            $user->name = $this->name;
            $user->utype = $this->utype;
            $user->save();
        }
        else {
            $user = User::find(Auth::user()->id);
            $user->name = $this->name;
            $user->save();

            $user->profile->mobile1 = $this->mobile1;
            $user->profile->mobile2 = $this->mobile2;
            $user->profile->pays = $this->pays;
            $user->profile->ville = $this->ville;
            $user->profile->adresse = $this->adresse;
            $user->profile->complet_profil = true;
            $user->profile->save();
        }

        
        $this->dispatchBrowserEvent("showMessage", ["message"=>"Mise à jour effectuée avec succès"]);
        return redirect()->to('/profile')->with('success', 'Votre profil est à jour, merci');
    }

    public function render()
    {
        return view('livewire.editprofile-component')->layout('layouts.templateUser');
    }
}
