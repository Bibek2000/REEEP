<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = ['name', 'slug', 'parent_id', 'order', 'status'];

    public function children(){
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function parent(){
        return $this->hasOne(Menu::class, 'id', 'parent_id');
    }
}
