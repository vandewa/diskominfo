<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanColocation extends Model
{
    use HasFactory;
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table ='permintaan_colocation';
    protected $guarded = []; 
    
    public function status()
    {
        return $this->belongsTo(ComCode::class,'status_st');
    }

}
