<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    //menggunakan tabel 'penilaians'
    protected $table = 'penilaians';
    // menyalakan fungsi add current timestamp pada kolom created_at dan updated_at
    public $timestamps = true; 
    /**
     * Kolom-kolom yang dapat diisi secara massal (mass assignable).
     */
    protected $fillable = [
        'kategori_penilaian_id',
        'penilaian_name',
        'bobot',
    ];

    //refer kepada DFD, setiap penilaian memiliki kategori penilaian
    public function kategori()
    {
        return $this->belongsTo(KategoriPenilaian::class, 'kategori_penilaian_id');
    }
}

