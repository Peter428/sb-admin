<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'code_fasilitas',
        'nama_fasilitas',
        'keterangan_fasilitas',
    ];
}
