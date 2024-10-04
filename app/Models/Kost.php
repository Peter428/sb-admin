<?php

namespace App\Models;
;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    protected $table = 'kosts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_kost',
        'alamat_kost',
        'id_categories',
        'fasilitas_kost',
        'harga_kost',
        'status',
        'keterangan',
    ];
}
