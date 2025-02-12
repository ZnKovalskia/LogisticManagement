<?php

namespace App\Models;
use App\Models\Staff;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $id = 'id';
    protected $fillable = ['nama_jabatan'];

    public function Staff()
    {
        return $this->hasMany('App\Models\Staff');
    }
}
