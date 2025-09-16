<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $fillable = ['adulto_id', 'fecha', 'rutinas_programadas', 'rutinas_cumplidas', 'observaciones'];

    // 👉 Un reporte pertenece a un adulto mayor
    public function adulto()
    {
        return $this->belongsTo(Adulto::class, 'adulto_id');
    }
}