<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_sales', 'nama_barang', 'nama_outlet', 'jumlah_stok', 'jumlah_display', 'visit_datetime'];
    protected $table = 'transaksi';
    public $timestamps = false;
}
