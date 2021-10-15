<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColocationServer extends Model
{
    use HasFactory;
     protected $guarded = [];
     protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            if($query->no == ''){

                $query->no = gen_colocation_server();

            }
        });
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
