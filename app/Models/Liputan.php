<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liputan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table ='liputan';
    protected $guarded = []; 
    
    public function status()
    {
        return $this->belongsTo(ComCode::class,'status_st');
    }
}
