<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contentchap extends Model
{
    use HasFactory;

    protected $fillable = ['contentchap_image','chapter_id'];


    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }
}
