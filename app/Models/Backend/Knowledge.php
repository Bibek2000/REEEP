<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;
    protected $table = 'knowledges';
    protected $fillable = ['title', 'description', 'image', 'pdf'];
}
