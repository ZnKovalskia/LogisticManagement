<?php

namespace App\Models;
use App\Models\barang;
use App\Models\supplier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primarykey = 'kode_barang';
    protected $fillable = ['foto','kode_barang','nama_barang','supplier_id', 'barang_masuk', 'barang_keluar', 'quantity'];

    public function supplier()
    {
        return $this->belongsTo('App\Models\supplier');
    }
}
