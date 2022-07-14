<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    protected $table ='presensi';
    protected $guarded = [];

      public function nama()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
