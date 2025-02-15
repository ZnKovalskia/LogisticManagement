<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    use HasFactory;

    protected $fillable = ['nama_testimoni', 'email_testimoni','judul_pesan', 'pesan'];
    protected $table = 'testimoni';
}
