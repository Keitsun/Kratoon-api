<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','manga_id','chapter_id','comment_id'];



    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }


    public function manga(){
        return $this->belongsTo(manga::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
