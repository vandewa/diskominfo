<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanSubdomain extends Model
{
    use HasFactory;
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table ='permohonan_subdomain';
    protected $guarded = []; 
    
    public function status()
    {
        return $this->belongsTo(ComCode::class,'status_st');
    }

    public function layanan()
    {
        return $this->belongsTo(ComCode::class,'jenislayanan_tp');
    }

    public function subdomain()
    {
        return $this->belongsTo(ComCode::class,'domain_st');
    }
}
