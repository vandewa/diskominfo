<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    protected $table = 'tb_jawaban';
    protected $primaryKey = 'id'; 
    protected $guarded = [];

    public function respondenJawaban()
    {
      return $this->hasMany(RespondenAnswer::class, 'id_jawaban');
    }
}
