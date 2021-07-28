<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerubahanVps extends Model
{
     use HasFactory;
    protected $table ='perubahan_vps';
     protected $guarded = [];
     protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            if($query->no == ''){

                $query->no = gen_perubahan_vps();

            }
        });
    }
     public function prosesor()
    {
       return $this->belongsTo(ComCode::class, 'prosesor_tp');
    }
    public function hd()
    {
       return $this->belongsTo(ComCode::class, 'hd_tp');
    }
    public function ram()
    {
       return $this->belongsTo(ComCode::class, 'ram_tp');
    }
    public function aksesNonfisik()
    {
       return $this->belongsTo(ComCode::class, 'aksesnonfisik_tp');
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
