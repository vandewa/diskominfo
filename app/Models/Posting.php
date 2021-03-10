<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;
    protected $table ='posting';
    protected $fillable = ['judul_posting', 'kata_kunci', 'keterangan'];
}
