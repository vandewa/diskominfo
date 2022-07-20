<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggal extends Model
{
    use HasFactory;
    protected $table ='tanggal';
    protected $guarded = [];
    protected $primaryKey = 'tanggal';
    public $incrementing = 'false';
    protected $keyType = 'string';
    

    public function masuk()
    {
        return $this->hasOne(Presensi::class, 'tanggal')->where('keterangan', 'Masuk');
    }
    
    public function keluar()
    {
         return $this->hasOne(Presensi::class, 'tanggal')->where('keterangan', 'Keluar'); 
    }

    public function presensis()
    {
        return $this->hasMany(Presensi::class, 'tanggal');
    }

    public function lkh()
    {
        return $this->hasOne(DailyWorkRecap::class, 'date');
    }

    
}
