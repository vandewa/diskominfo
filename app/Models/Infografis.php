<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infografis extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table ='infografis';
    protected $guarded = [];

    public function namanya()
    {
        return $this->belongsTo(Users::class, 'created_by');
    }
    
       public function attachments(){
        return $this->hasMany(Attachments::class, 'id_infografis');
    }
    
       public function attachments2(){
        return $this->hasMany(Attachments::class, 'id_infografis')->orderBy('created_at', 'desc');
    }

    public function gambarMuka()
    {
        return $this->hasOne(Attachments::class, 'id_infografis');
    }

}
