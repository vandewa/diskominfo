<?php

namespace App\Models\Wonosobo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    protected $connection = 'wonosobokab';
    protected $table ='desa';
    protected $primaryKey ='id_desa';
    protected $guarded = [];
}
