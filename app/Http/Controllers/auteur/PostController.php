<?php

namespace App\Http\Controllers\auteur;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categorie::all();
        $user = User::all();
        return view('auteurs.create', compact('categorie', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'titre' => 'required',
            'content' => 'required',
            'mini_content' => 'required',
            'audio' => 'file|mimes:mp3|max:10240', // Taille maximale de l'audio : 10 Mo
            'video' => 'file|mimes:mp4|max:10240', // Taille maximale de la vidéo : 10 Mo
            'image' => 'image|mimes:jpeg,png,jpg|max:2048', // Ajoutez des règles de validation selon vos besoins
            //'date_publi' => 'required',
            'slug' => 'required',
            'tag' => 'required',
            'categorie_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $post = new Post;

        //ajout de fichier
        $image = $request->file('image');
        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('medias', $imageName);
            $post->image = $imageName;
        }

        $video = $request->file('video');
        if ($video) {
            $videoName = time().'.'.$video->getClientOriginalExtension();
            $video->move('medias', $videoName);
            $post->video = $videoName;
        }

        $audio = $request->file('audio');
        if ($audio) {
            $audioName = time().'.'.$audio->getClientOriginalExtension();
            $audio->move('medias', $audioName);
            $post->audio = $audioName;
        }
        /*$image = $request->image;
        $extension = $image->getClientOriginalExtension() ?? 'png';
        /$imageName = time().'.'.$extension;
        $imageName = time().'.'.$image->getClientOriginalExtension() ?? '';
        $request->image->move('medias', $imageName);
        $post->image = $imageName;
        $video = $request->video;
        $videoName = time().'.'.$video->getClientOriginalExtension();
        $request->video->move('medias', $videoName);
        $post->video = $videoName;
        $audio = $request->audio;
        $audioName = time().'.'.$audio->getClientOriginalExtension();
        $request->audio->move('medias', $audioName);
        $post->audio = $audioName;

        /*$post->audio = $request->audio->store('medias', 'public');
        $post->video = $request->video->store('medias', 'public');
        $post->image = $request->image->store('medias', 'public');*/

        $post->titre = $request->titre;
        $post->mini_content = $request->mini_content;
        $post->content = $request->content;
        //$post->date_publi = $request->date_publi;
        $post->slug = $request->slug;
        $post->tag = $request->tag;
        $post->categorie_id = $request->categorie_id;
        $post->user_id = $request->user_id;
        $post->soumet();
        $post->save();

        //$this->dispatchBrowserEvent("affMessage", ["message"=>"Ajout éffectué avec succès"]);
        return redirect()->route('auteurs.create')->with('success', 'Ajout réussi, en attendant la validation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$post = Post::find($id);
        $post = Post::where('slug',$id)->first();
        return view('auteurs.show', compact('post')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::all();
        $user = User::all();
        //$post = Post::findOrFail($id);
        $post = Post::where('slug',$id)->first();
        return view('auteurs.edit', compact('categorie', 'user', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $image = $request->file('image');
        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('medias', $imageName);
            $post->image = $imageName;
        }

        $video = $request->file('video');
        if ($video) {
            $videoName = time().'.'.$video->getClientOriginalExtension();
            $video->move('medias', $videoName);
            $post->video = $videoName;
        }

        $audio = $request->file('audio');
        if ($audio) {
            $audioName = time().'.'.$audio->getClientOriginalExtension();
            $audio->move('medias', $audioName);
            $post->audio = $audioName;
        }
        /*$image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('medias', $imageName);
        $post->image = $imageName;
        $video = $request->video;
        $videoName = time().'.'.$video->getClientOriginalExtension();
        $request->video->move('medias', $videoName);
        $post->video = $videoName;
        $audio = $request->audio;
        $audioName = time().'.'.$audio->getClientOriginalExtension();
        $request->audio->move('medias', $audioName);
        $post->audio = $audioName;*/
        $post->titre = $request->titre;
        $post->mini_content = $request->mini_content;
        $post->content = $request->content;
        $post->slug = $request->slug;
        $post->tag = $request->tag;
        $post->categorie_id = $request->categorie_id;
        $post->user_id = $request->user_id;

        $post->save();
        return redirect()->route('auteur.post')
               ->with('success', 'Mise à jour réussie !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $post = Post::findOrFail($id);
        $post = Post::where('slug',$id)->first();
        $post->delete();

        return redirect()->route('auteur.post')
            ->with('success', 'Suppession réussie !');
    }
}
