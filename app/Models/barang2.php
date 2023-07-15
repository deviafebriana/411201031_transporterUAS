<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang2 extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_barang', 'deskripsi', 'stok_barang', 'harga_barang'];
    protected $table = 'barang2';
    public $timestamps = false;
}
