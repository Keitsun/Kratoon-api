<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['content','user_id','manga_id','chapter_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function manga(){
        return $this->belongsTo(Manga::class);
    }

    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
