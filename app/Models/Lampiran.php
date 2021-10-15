<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{
    use HasFactory;
    protected $table = 'lampiran';
    protected $primarykey ='id';
    protected $guarded = [];

    public function nama()
    {
        return $this->belongsTo(Users::class, 'created_by');
    }
}
