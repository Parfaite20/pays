<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function index()
    {

        $post = Post::all();
        //$user = Auth::user();
        $comms = Auth::user()->posts()->with('commentaires')->get()->pluck('commentaires')->flatten();
        $comm = Commentaire::all();
        return view('commentes.index', compact('post', 'comm', 'comms'));
    }

    public function store(Request $request, Post $post_id)
    {
        //$post = Post::findOrFail($post_id);

        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'commente' => 'required',
            //'post_id' => 'required|exists:posts,id',
        ]);

        $post_id->commentaires()->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'content'=>$request->content,
        ]);

        return redirect()->route('detail', $post_id)->with('message', 'Merci, votre commentaire est ajouté avec succès');
        /*$comm = new Commentaire;
        $comm->name = $request->name;
        $comm->email = $request->email;
        $comm->commente = $request->commente;
        $comm->post_id = $id->id;
        $comm->save();
        //$post->commentaires()->save($comm);

        return redirect()->route('detail', $id)->with('message', 'Merci, votre commentaire est ajouté avec succès');*/
    }

    public function show($id)
    {
        
    
    }
}
