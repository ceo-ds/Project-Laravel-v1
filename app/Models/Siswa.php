<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    //
    public $fillable = [
        'nama',
        'nis',
        'agama',
        'jenisk_elamin',
        'alamat',
        'tgl_lahir',
    ];

    public $timestemps = true;
}
