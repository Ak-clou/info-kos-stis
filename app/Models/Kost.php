<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    protected $fillable = [
        'nama_kos',
        'pemilik',
        'telp_pemilik',
        'kamar_kosong',
        'lokasi',
        'pinpoint',
        'harga_min',
        'harga_max',
        'tipe_bayar',
        'batasan_agama',
        'tipe_kos',
        'batasan_mahasiswa',
        'panjang',
        'lebar',
        'watt_listrik',
        's_listrik',
        's_kamar_mandi',
        's_ac',
        's_kipasangin',
        's_kasur',
        's_mejabelajar',
        's_wifi',
        's_parkir',
        's_dapur',
        's_lemari',
        's_kulkas',
        's_jemuran',
        's_rooftoop',
        's_mesincuci',
        's_ventilasi',
        'deskripsi',
        'foto',
    ];
    use HasFactory, Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_kos'
            ]
        ];
    }
}
