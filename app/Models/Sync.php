<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\TbPendaftaran;

class Sync extends Model
{
    use HasFactory;

    protected $connection = 'simterpadu';

    public static function getTbPendaftaran()
    {
        $data = self::on('simterpadu')->table('tbpendaftaran')->get();

        foreach ($data as $item) {
            TbPendaftaran::updateOrCreate(
                [
                    'KodePendaftaran' => $item->KodePendaftaran,
                ],
                [
                    'field1' => $item->field1,
                    'field2' => $item->field2,
                    
                ]
            );
        }
    }

    public static function getTbPendaftaranProdi()
    {
        $data = self::on('simterpadu')->table('tbpendaftaranprodi')->get();

        foreach ($data as $item) {
            TbPendaftaranProdi::updateOrInsert(
                [
                    'key1' => $item->key1,
                    'key2' => $item->key2,
                ],
                [
                    'field1' => $item->field1,
                    'field2' => $item->field2,
                    // Add other fields as necessary
                ]
            );
        }
    }

    public static function getTbPendaftaranProdiKelas()
    {
        $data = self::on('simterpadu')->table('tbpendaftaranprodikelas')->get();

        foreach ($data as $item) {
            TbPendaftaranProdiKelas::updateOrInsert(
                [
                    'key1' => $item->key1,
                    'key2' => $item->key2,
                ],
                [
                    'field1' => $item->field1,
                    'field2' => $item->field2,
                    // Add other fields as necessary
                ]
            );
        }
    }
}
