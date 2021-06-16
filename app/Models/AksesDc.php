<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksesDc extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            if($query->no == ''){

                $query->no = gen_no_akses_dc();

            }
        });
    }
}
