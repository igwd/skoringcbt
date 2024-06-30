<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TbPendaftaran extends Model
{
    use HasFactory;

    //use SoftDeletes;

    protected $table = "tbpendaftaran";

    //protected $dates = ['created_at','updated_at','deleted_at'];
    protected $primaryKey = "KodePendaftaran";
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'KodePendaftaran',
        'NamaPendaftaran',
        'NamaPendaftaran_Inggris',
        'Program',
        'Tahun',
        'Gelombang',
        'DariTgl',
        'SampaiTgl',
        'IdUjian',
        'TglUjian',
        'JamUjian',
        'TglTPA',
        'TglKesehatan',
        'TglWawancara',
        'TglPengumuman',
        'JenisForm',
        'FilePetunjuk',
        'FileJadwal',
        'Kode_Fak',
        'NamaBank',
        'NoRekening',
        'AtasNama',
        'NomorSKD',
        'BiayaPendaftaran',
        'Pembayaran',
        'JalurUndangan',
        'JalurPrestasi',
        'DariTglPrestasi',
        'SampaiTglPrestasi',
        'BiayaPendaftaranUndangan',
        'TglDaftarKembaliDari',
        'TglDaftarKembaliSampai',
        'Jenjang',
        'JenisUjian',
        'UjianCBTDari',
        'UjianCBTSampai',
        'JmlSesiPerHari',
        'KontakPerson',
        'KontakPerson_Inggris',
        'BatasAkhirFormulir',
        'IkutPkkmb',
        'FormLengkap',
        'PendidikanTerkahirCalon',
        'InputNilaiRaport',
        'InputFotoProfile',
        'InputRiwayatPendidikan',
        'LinkWaGroup',
        'SS',
        'SyaratEnglishClass',
        'JalurMasuk',
        'JmlCicilan',
    ];

    public function prodi(){
        
    }
}
