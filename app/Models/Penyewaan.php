<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    protected $table = 'penyewaans';
    protected $fillable = [
      'id_customer',
      'id_kost',
      'tgl_sewa',
      'harga_sewa',
      'status_sewa'
    ];
}
