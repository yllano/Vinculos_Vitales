<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
    'name',
    'email',
    'password',
    'role',
    'familiar_id',
    'fecha_nacimiento',
    'condiciones_salud',
];
    public function recordatoriosCreados()
    {
        return $this->hasMany(\App\Models\Recordatorio::class, 'familiar_id');
    }

    public function recordatorios()
    {
        return $this->hasMany(\App\Models\Recordatorio::class, 'adulto_id');
    }
   
    public function adultos()
    {
        return $this->hasMany(User::class, 'familiar_id')->where('role', 'adulto');
    }
        public function rutinas()
    {
        return $this->hasMany(\App\Models\Rutina::class, 'familiar_id');
    }

}
