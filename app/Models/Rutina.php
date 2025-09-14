<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rutina extends Model
{
    use HasFactory;

    protected $fillable = ['adulto_id', 'tipo', 'descripcion', 'hora', 'fecha', 'completado'];

    // 👉 Una rutina pertenece a un adulto mayor
    public function adultoMayor()
    {
        return $this->belongsTo(AdultoMayor::class, 'adulto_id');
    }
}
