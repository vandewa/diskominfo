<?php

namespace App\Models;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanColoctn extends Model
{
    use HasFactory;
    protected $table = 'colocation_servers';
    protected $fillable = [
        'opd',
        'bidang',
        'alamat',
        'telepon',
        'email',
        'approval_date',
        'aproval_id',
        'valid_util',
        'penanggung_jawab_id'
    ];
}
