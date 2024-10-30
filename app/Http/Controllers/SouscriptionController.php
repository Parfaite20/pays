<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Souscription;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SouscriptionController extends Controller
{
    public function index()
    {
        $user = User::all();
        $sou = Auth::user()->souscriptions()->get();
        $sous = Souscription::all();
        return view('users.paiement', compact('user', 'sou', 'sous'));
    }
}
