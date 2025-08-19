<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPenilaian extends Model
{
    //menggunakan tabel 'kategoripenilaians'
    protected $table = 'kategoripenilaians';
    // mematikan fungsi add current timestamp pada kolom created_at dan updated_at
    public $timestamps = true; 
    /**
     * Kolom-kolom yang dapat diisi secara massal (mass assignable).
     */
    protected $fillable = [
        'kategori_name'
    ];
}
