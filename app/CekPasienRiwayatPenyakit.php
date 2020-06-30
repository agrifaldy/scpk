<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CekPasienRiwayatPenyakit extends Model
{
    //
    protected $table = 'cek_pasien_riwayat_penyakit';

    protected $fillable = [
        'cek_pasien_id', 'pasien_id', 'penyakit_id'
    ];
}
