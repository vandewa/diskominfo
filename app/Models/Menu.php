<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table="menu";
    protected $guarded = [];

    public function childs(){
        return $this->hasMany(Menu::class, 'parent');
    }
     public function parent(){
        return $this->hasOne(Menu::class, 'parent');
    }
     public function halaman()
    {
        return $this->hasOne(Posting::class, 'slug');
    }

}
