<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_sales', 'lokasi_sales', 'lokasi_outlet'];
    protected $table = 'sales';
    public $timestamps = false;
}
