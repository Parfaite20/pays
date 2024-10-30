<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'mini_content', 'content', 'audio', 'video', 'image', 'slug', 'tag', 'categorie_id','user_id','publie'];
    //protected $fillable = ['slug', 'date_publi'];

    public function categories()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function soumet()
    {
        $this->publie = false;
        $this->save();
    }

}
