<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';

    protected $fillable = [
      'code_transaksi',
      'id_penyewaan',
      'tgl_transaction',
      'nominal_transaction',
      'bukti_bayar',
      'keterangan',
    ];
}
