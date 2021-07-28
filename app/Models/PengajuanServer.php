<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanServer extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            if($query->no == ''){

                $query->no = gen_pengajuan_server();

            }
        });
    }

    public function status()
    {
        return $this->belongsTo(ComCode::class,'status_st');
    }
}
