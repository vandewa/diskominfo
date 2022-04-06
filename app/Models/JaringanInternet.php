<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JaringanInternet extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table ='jaringan_internet';
    protected $guarded = []; 
    
    public function status()
    {
        return $this->belongsTo(ComCode::class,'status_st');
    }

    public function jaringan()
    {
        return $this->belongsTo(ComCode::class,'jaringan_st');
    }

    public function layanan()
    {
        return $this->belongsTo(ComCode::class,'layanan_st');
    }
}
