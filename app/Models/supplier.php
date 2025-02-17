<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\supplier;
use App\Models\barang;

class supplier extends Model
{
    use HasFactory;
    protected $fillable = ['nama_supplier'];
    protected $id = 'id';
    protected $table = 'supplier';

    public function barang()
    {
        return $this->hasMany('App\Models\barang');
    }


}
