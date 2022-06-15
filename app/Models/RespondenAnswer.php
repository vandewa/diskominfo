<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespondenAnswer extends Model
{
    use HasFactory;
    protected $table = 'responden_answer';
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function jawabannya() {
        return $this->belongsTo(Jawaban::class, 'id_jawaban');
    }

    public function soalnya() {
        return $this->belongsTo(Soal::class, 'id_soal');
    }

    public function respondennya() {
        return $this->belongsTo(Responden::class, 'id_responden');
    }

}

