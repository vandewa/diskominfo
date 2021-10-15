<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan
 extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $primarykey ='id';
    protected $guarded = [];

     public function childs(){
        return $this->hasMany(Pengaduan::class, 'parent');
    }

    public function namanya()
    {
        return $this->belongsTo(Users::class, 'created_by');
    }


}
