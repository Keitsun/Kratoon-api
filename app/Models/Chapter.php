<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = ['title','desc','translator','manga_id','user_id'];
    

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function contentchaps(){
        return $this->hasMany(Contentchap::class);
    }

    public function manga(){
        return $this->belongsTo(Manga::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
