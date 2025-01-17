<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'commente', 'post_id'];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
