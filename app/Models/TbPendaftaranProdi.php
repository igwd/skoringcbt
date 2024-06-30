<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbPendaftaranProdi extends Model
{
    use HasFactory;
    //use SoftDeletes;

    protected $table = "tbpendaftaranprodi";

    //protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [
        'KodePendaftaran',
        'KodeProdi',
        'Program',
        'Kelompok',
        'KodeDepanNIM',
        'PilihanKelas',
        'MenerimaPendaftaran',
        'PaketFormJalurTes',
        'JalurPrestasi',
        'PaketFormJalurPrestasi',
        'DayaTampungPerPeriode',
    ];
}
