<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_posting';
    protected $table ='posting';
    protected $fillable = ['posisi', 'judul_posting','isi_posting', 'kata_kunci', 'id_kategori', 'keterangan'];

    public function attachment(){
        return $this->hasMany(Attachment::class, 'id_tabel');
    }

    public function gambarMuka()
    {
        return $this->hasOne(Attachment::class, 'id_tabel');
    }

    public function nama()
    {
        return $this->belongsTo(Users::class, 'created_by');
    }

    public function personil()
    {
        return $this->hasOne(Attachment::class, 'id_tabel');
    }
    public function kategori()
    {
        return $this->belongsTo(Category::class, 'id_kategori');
    }


}
