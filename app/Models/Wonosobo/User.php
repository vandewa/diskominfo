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
    protected $guarded = [];
    public $timestamps = false;

    public function skpd()
    {
        return $this->belongsTo(SKPD::class, 'id_skpd');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'id_desa');
    }

}
