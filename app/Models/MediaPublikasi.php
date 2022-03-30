<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaPublikasi extends Model
{
    use HasFactory;   
    protected $primaryKey = 'id';
    protected $table ='media_publikasi';
    protected $guarded = []; 
    
    public function status()
    {
        return $this->belongsTo(ComCode::class,'status_st');
    }
}
