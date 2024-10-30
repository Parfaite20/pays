<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class ProfileComponent extends Component
{




    public function render()
    {
        $user = User::find(Auth::user()->id);
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        if (!$profile) {
            $pro = new Profile();
            $pro->user_id = Auth::user()->id;
            $pro->save();
        }

        return view('livewire.profile-component', ['user'=>$user])->layout('layouts.templateUser');
    }
}
