<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timpenilai extends Model
{
    //menggunakan tabel 'bidangs'
    protected $table = 'timpenilais';
    // mematikan fungsi add current timestamp pada kolom created_at dan updated_at
    public $timestamps = true; 
    /**
     * Kolom-kolom yang dapat diisi secara massal (mass assignable).
     */
    protected $fillable = [
        'opd_penilai'
    ];
}
