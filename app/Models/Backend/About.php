<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    protected $fillable = ['title', 'description', 'image'];
    protected $casts = [
        'title' => 'json',
        'description' => 'json',
    ];
}
