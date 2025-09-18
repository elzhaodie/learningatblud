<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Opd extends Authenticatable
{
    //menggunakan tabel 'opds'
    protected $table = 'opds';
    // mematikan fungsi add current timestamp pada kolom created_at dan updated_at
    public $timestamps = true; 
    /**
     * Kolom-kolom yang dapat diisi secara massal (mass assignable).
     */
    protected $fillable = [
        'bidang_id',
        'role_id',
        'daerah_id',
        'opd_name',
        'email',
        'password',
        'alamat'
    ];
}
