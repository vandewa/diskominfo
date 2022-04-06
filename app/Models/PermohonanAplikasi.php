<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanAplikasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table ='permohonan_aplikasi';
    protected $guarded = []; 
    
    public function status()
    {
        return $this->belongsTo(ComCode::class,'status_st');
    }

}
