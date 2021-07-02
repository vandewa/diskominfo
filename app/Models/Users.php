<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table ='users';
    protected $guarded = [];

    public function getNameAttribute($value){
        return ucwords(strtolower($value));
    }

}
