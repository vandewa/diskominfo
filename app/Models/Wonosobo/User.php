<?php

namespace App\Models\Wonosobo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $connection = 'wonosobokab';
    protected $table ='users';
    protected $primaryKey ='id_users';
}
