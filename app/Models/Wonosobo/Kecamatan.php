<?php

namespace App\Models\Wonosobo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $connection = 'wonosobokab';
    protected $table ='kecamatan';
    protected $primaryKey ='id_kecamatan';
    protected $guarded = [];
}
