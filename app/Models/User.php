<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use  HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = true;


    protected $fillable = [
        'nama_singkatan',
        'username',
        'password',
        'username_display',
        'id_ormawa',
        'id_role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Roles::class, 'id_role', 'id_role');
    }

    public function ormawa()
    {
        return $this->belongsTo(Ormawa::class, 'id_ormawa', 'id_ormawa');
    }
}
