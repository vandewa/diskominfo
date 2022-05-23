<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mbuh extends Model
{
    use HasFactory;

    protected $table= "mbuh";

    public function anak()
    {
        return $this->hasMany(Mbuh::class, 'root');
    }
}
