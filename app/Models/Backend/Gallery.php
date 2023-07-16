<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $fillable = ['title', 'description', 'image', 'album_id'];

    public function album(){
        return $this->belongsTo(Album::class);
    }
}
