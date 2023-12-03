<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'TahunAjaran',
        'NamaLengkap',
        'JenisKelamin',
        'Tempat_TanggalLahir',
        'Status',
        'AnakKe',
        'JumlahSaudara',
        'Hobi',
        'CitaCita',
        'Email',
        'Alamat',
        'Nomor',
        'NamaAyah',
        'NamaIbu',
        'filepembayaran',
    ];
}

