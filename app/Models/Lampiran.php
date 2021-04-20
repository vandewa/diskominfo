<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{
    use HasFactory;
    protected $table = 'lampiran';
    protected $primarykey ='id';
    protected $fillable = ['id', 'nama_lampiran', 'keterangan', 'created_by'];

    public function nama()
    {
        return $this->belongsTo(Users::class, 'created_by');
    }
}
