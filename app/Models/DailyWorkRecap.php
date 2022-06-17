<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyWorkRecap extends Model
{
    use HasFactory;

    protected $table = 'daily_work_recap';
    protected $guarded = [];

    public function nama()
    {
        return $this->belongsTo(User::class, 'name');
    }
}
