<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function peminjamanDetail()
    {
        return $this->hasMany(PeminjamanDetail::class, 'peminjaman_id');
    }

    public function statusPinjam()
    {
        return $this->belongsTo(ComCode::class, 'peminjaman_st');
    }

    public function penerima()
    {
        return $this->belongsTo(User::class, 'penerima_id');
    }
    public function petugas()
    {
        return $this->belongsTo(User::class, 'petugas_id');
    }
    public function peminjam()
    {
        return $this->belongsTo(User::class, 'peminjam_id');
    }
}
