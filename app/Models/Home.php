<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Home extends Model
{
    use HasFactory;
    protected $table ='posting';
    protected $dates = ['created_time'];
    
}
