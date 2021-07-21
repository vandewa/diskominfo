<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ComCode;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tiket extends Model implements JWTSubject
{ 
    use HasFactory;

    protected $guarded = [];

    public function penerima()
    {
        return $this->belongsTo(User::class, 'penerima_id');
    }
    public function petugas()
    {
        return $this->belongsTo(User::class, 'petugas_penyelesaian_id');
    }

    public function prioritas()
    {
        return $this->belongsTo(ComCode::class, 'priority_tp');
    }
    public function kategori()
    {
        return $this->belongsTo(ComCode::class, 'tiket_tp');
    }
    public function status()
    {
        return $this->belongsTo(ComCode::class, 'tiket_st');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}
