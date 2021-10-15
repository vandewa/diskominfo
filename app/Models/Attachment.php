<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_attachment';
    protected $table ='attachment';
    protected $guarded = [];
}
