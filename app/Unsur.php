<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unsur extends Model
{
    //menggunakan tabel 'unsurs'
    protected $table = 'unsurs';
    // menyalakan fungsi add current timestamp pada kolom created_at dan updated_at
    public $timestamps = true; 
    /**
     * Kolom-kolom yang dapat diisi secara massal (mass assignable).
     */
    protected $fillable = [
        'penilaian_id',
        'indikator',
        'unsur',
        'bobot',
    ];
}
