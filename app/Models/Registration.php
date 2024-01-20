<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'tgl_lahir',
        'jns_kelamin',
        'agama',
        'tinggal_bersama',
        'anak_ke',
        'usia',
        'no_hp',

        'nama_ayah',
        'nik_ayah',
        'tgllhr_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'nik_ibu',
        'tgllhr_ibu',
        'pendidikan_ibu',
        'perkerjaan_ibu',

        'tinggi_bdn',
        'berat_bdn',
        'jrk_tempuh',
        'jmlh_saudara',

        'user_id'
        
    ];
}
