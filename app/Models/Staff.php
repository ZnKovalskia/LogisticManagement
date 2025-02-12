<?php

namespace App\Models;
use App\Models\Staff;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $fillable = ['nip','foto','nama_pegawai','email_pegawai','role_id','gender','no_telepon'];

    public function Role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
