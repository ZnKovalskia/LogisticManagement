<?php

namespace App\Models;
use App\Models\barang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = ['foto','kode_barang', 'nama_barang', 'barang_masuk', 'barang_keluar', 'quantity'];
    protected $table = 'barang';

    
}
