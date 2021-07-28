<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KunjunganDc extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'ijin_kunjungans';
    protected $casts = [
        'approval_date' => 'datetime',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            if($query->no == ''){

                $query->no = gen_no_akses_dc();

            }
        });
    }

   
    public function jenisIdentitas()
    {
        return $this->belongsTo(ComCode::class, 'identity_tp');
    }
    public function penanggungJawab()
    {
        return $this->belongsTo(User::class, 'penanggung_jawab_id');
    }
    public function menyetujui()
    {
        return $this->belongsTo(User::class, 'aproval_id');
    }
    public function status()
    {
        return $this->belongsTo(ComCode::class,'status_st');
    }

}
