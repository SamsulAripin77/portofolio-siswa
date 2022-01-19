<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'hp',
        'url_linkedin',
        'uname_linkedin',
        'address',
        'about_me',
        'nama_sekolah',
        'jurusan',
        'nilai_rata',
        'tahun_masuk',
        'tahun_keluar',
    ];
}
