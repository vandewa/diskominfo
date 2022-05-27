<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarInformasiPublik extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table ='daftar_informasi_publik';
    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(ComCode::class,'type');
    }
}
