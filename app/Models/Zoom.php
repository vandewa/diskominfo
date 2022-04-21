<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoom extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function status()
        {
            return $this->belongsTo(ComCode::class,'status_st');
        }
}
