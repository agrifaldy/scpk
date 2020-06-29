<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    //
    protected $table = 'pasien';

    protected $fillable = [
        'nama', 'tanggal_lahir', 'umur', 'jenis_kelamin', 'alamat', 'nik', 'no_hp', 'kota'
    ];
}
