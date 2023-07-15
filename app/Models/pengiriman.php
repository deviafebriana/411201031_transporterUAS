<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'no_pengiriman', 'tanggal', 'lokasi_id', 'barang_id', 'jumlah_barang', 'harga_barang', 'kurir_id'];
    protected $table = 'pengiriman';
    public $timestamps = false;
}
