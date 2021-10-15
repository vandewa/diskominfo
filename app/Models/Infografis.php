<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infografis extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table ='infografis';
    protected $guarded = [];

    public function namanya()
    {
        return $this->belongsTo(Users::class, 'created_by');
    }
}
