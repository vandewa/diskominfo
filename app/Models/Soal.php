<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $table = 'tb_soal';
    protected $primaryKey = 'id';
    protected $guarded = []; 

    public function jawaban() {
        return $this->hasMany(Jawaban::class, 'id_soal');
    }
    
}
