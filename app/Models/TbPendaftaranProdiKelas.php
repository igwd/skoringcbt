<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbPendaftaranProdiKelas extends Model
{
    use HasFactory;

    protected $table = "tbpendaftaranprodikelas";

    protected $fillable = [
        'Id',
        'KodePendaftaran',
        'KodeProdi',
        'Program',
        'Kelas',
        'NamaKelas',
        'NamaKelasInggris',
    ];
}
