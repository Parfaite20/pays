<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Commentaire;
use Livewire\Component;


class DetailpostComponent extends Component
{
    public $post_id;
    //public $commentaires;

    public function mount($post_id /*, Commentaire $commentaires*/)
    {
        $this->post_id = $post_id;
       /*$this->commentaires = $commentaires;*/
    }

    public function render() 
    {
        //$aff = Commentaire::where('post_id', $this->post_id)->first();
        $post = Post::where('slug', $this->post_id)->first();
        //$id = $post->id;
        return view('livewire.detailpost-component', ['post'=>$post],
         /*['comments' => $this->commentaires->commentaires()->latest()->get(),]*/
         )->layout('layouts.template');
    }
}
