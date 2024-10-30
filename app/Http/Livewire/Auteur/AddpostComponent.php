<?php

namespace App\Http\Livewire\Auteur;

//use App\Models\Article;
use App\Models\Categorie;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
//use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddpostComponent extends Component
{

    use WithFileUploads;
    //public $ajoutpost=[];
    //public $post;

    public $titre;
    public $content;
    public $audio;
    public $video;
    public $image;
    public $date_publi;
    public $slug;
    public $tag;
    public $categorie_id;
    public $user_id;

    public $totalStep = 2;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function suivantStep()
    {
        $this->currentStep++;
        if ($this->currentStep > $this->totalStep) {
            $this->currentStep = $this->totalStep;
        }
        //return redirect()->to('/auteur/addpost');
    }

    public function retourStep()
    {
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
        //return redirect()->to('/auteur/addpost');
    }

    public function storePost()
    {


        $this->validate([

            'titre' => 'required',
            'content' => 'required',
            'audio' => 'file|mimes:mp3|max:10240', // Taille maximale de l'audio : 10 Mo
            'video' => 'file|mimes:mp4|max:10240', // Taille maximale de la vidéo : 10 Mo
            'image' => 'image|max:1024', // Ajoutez des règles de validation selon vos besoins
            'date_publi' => 'required',
            'slug' => 'required',
            'tag' => 'required',
            /*'categorie_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',*/
        ]);


        /*Post::create([
            'titre' => $this->titre,
            'content' => $this->content,
            'date_publi' => $this->date_publi,
            'slug' => $this->slug,
            'tag' => $this->tag,
            'categorie_id' => $this->categorie_id,
            //'user_id' => Auth::id(),
        ]);*/

        $post = new Post();
        $post->titre = $this->titre;
        $post->content = $this->content;
        $post->audio = $this->audio->store('medias');
        $post->video = $this->video->store('medias');
        $post->image = $this->image->store('medias');
        $post->date_publi = $this->date_publi;
        $post->slug = $this->slug;
        $post->tag = $this->tag;
        /*$post->categorie_id = $this->categorie_id;
        $post->user_id = $this->user_id;
        $audioName = time() . '.' . $this->audio->extension();
        $this->audio->storeAs('medias', $audioName, 'public');
        $post->audio = $audioName;
        /*$videoName = time() . '.' . $this->video->extension();
        $this->video->storeAs('medias', $videoName, 'public');
        $post->video = $videoName;
        $imageName = time() . '.' . $this->image->extension();
        $this->image->storeAs('medias', $imageName, 'public');
        $post->image = $imageName;*/
        $post->save();

        session()->flash('Post créé avec succès');

        //dump($this->ajoutart);*/

    }

    public function render()
    {
        $user = User::all();
        $categorie = Categorie::all();
        $post = Post::all();
        return view('livewire.auteur.addpost-component', ['user'=>$user], ['categorie'=>$categorie], ['post'=>$post])->layout('layouts.templateUser');
    }
}
