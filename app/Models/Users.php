<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Models\LaratrustRole;
use Laratrust\Traits\LaratrustUserTrait;
use Cviebrock\EloquentSluggable\Sluggable;

class Users extends Authenticatable  implements JWTSubject
{
    use HasFactory;
    use LaratrustUserTrait, Sluggable;
    protected $primaryKey = 'id';
    protected $table ='users';
    protected $guarded = [];

    public function getNameAttribute($value){
        return ucwords(strtolower($value));
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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'jabatan'
            ]
        ];
    }

    



}
