<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outlet extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_outlet', 'lokasi_outlet', 'alamat_outlet'];
    protected $table = 'outlet';
    public $timestamps = false;
}
