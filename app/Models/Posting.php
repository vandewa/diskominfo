<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Posting extends Model
{
    use HasFactory, Sluggable;
    protected $primaryKey = 'id_posting';
    protected $table ='posting';
    protected $fillable = ['posisi', 'created_by', 'judul_posting','isi_posting', 'kata_kunci', 'id_kategori', 'keterangan', 'slug'];

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
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul_posting'
            ]
        ];
    }

    public function halaman()
    {
        return $this->hasOne(Menu::class, 'slug');
    }


}
