<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $fillable = ['adulto_id', 'mensaje', 'leida'];

    // 👉 Una notificación pertenece a un adulto mayor
    public function adultoMayor()
    {
        return $this->belongsTo(AdultoMayor::class, 'adulto_id');
    }
}