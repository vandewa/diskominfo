<?php

namespace App\Models\Wonosobo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKPD extends Model
{
    use HasFactory;

    protected $connection = 'wonosobokab';
    protected $table ='skpd';
    protected $primaryKey ='id_skpd';
    protected $guarded = [];
}
