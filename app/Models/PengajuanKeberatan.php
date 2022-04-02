<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanKeberatan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table ='pengajuan_keberatan';
    protected $guarded = []; 
    
    public function status()
    {
        return $this->belongsTo(ComCode::class,'status_st');
    }


}
