<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    protected $primarykey ='id';
    protected $guarded = [];

     public function attachments(){
        return $this->hasMany(Attachments::class, 'id_pengumuman');
    }
    public function gambarmuka()
    {
        return $this->hasOne(Attachments::class, 'id_pengumuman');
    }

}
