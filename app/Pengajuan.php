<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    //menggunakan tabel 'pengajuans'
    protected $table = 'pengajuans';
    // mematikan fungsi add current timestamp pada kolom created_at dan updated_at
    public $timestamps = true; 
    /**
     * Kolom-kolom yang dapat diisi secara massal (mass assignable).
     */
    protected $fillable = [
        'opd_id',
        'gambaran_umum',
        'dok_subs_teknis' ,
        'dok_srt_permohonan',
        'dok_srt_sanggup_meningkatkan_kinerja',
        'dok_pola_tata_kelola',
        'dok_spm',
        'dok_renstra',
        'dok_lap_audit',
        'dok_lapkeu',
    ];
}
