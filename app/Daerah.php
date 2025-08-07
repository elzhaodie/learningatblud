<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    //menggunakan tabel 'daerahs'
    protected $table = 'daerahs';
    // mematikan fungsi add current timestamp pada kolom created_at dan updated_at
    public $timestamps = true; 
    /**
     * Kolom-kolom yang dapat diisi secara massal (mass assignable).
     */
    protected $fillable = [
        'daerah_name',
        'jenis_daerah'
    ];
}
