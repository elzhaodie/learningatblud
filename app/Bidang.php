<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    //menggunakan tabel 'bidangs'
    protected $table = 'bidangs';
    // mematikan fungsi add current timestamp pada kolom created_at dan updated_at
    public $timestamps = false; 
    /**
     * Kolom-kolom yang dapat diisi secara massal (mass assignable).
     */
    protected $fillable = [
        'bidang_name'
    ];
}
