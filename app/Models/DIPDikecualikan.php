<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DIPDikecualikan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table ='daftar_informasi_publik_dikecualikan';
    protected $guarded = [];


}

