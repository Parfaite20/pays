<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageAuteurController extends Controller
{
    public function index()
    {
        return view('users.pageAuteur');
    }
}
