<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adulto extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'familiar_id', 'fecha_nacimiento', 'condiciones_salud'];

    public function familiar()
    {
        return $this->belongsTo(User::class, 'familiar_id');
    }

    public function rutinas()
    {
        return $this->hasMany(Rutina::class, 'adulto_id');
    }

    public function cuestionario()
    {
        return $this->hasOne(Cuestionario::class, 'adulto_id');
    }

    public function notificaciones()
    {
        return $this->hasMany(Notificacion::class, 'adulto_id');
    }

    public function reportes()
    {
        return $this->hasMany(Reporte::class, 'adulto_id');
    }
}
