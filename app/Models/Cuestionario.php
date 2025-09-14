<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cuestionario extends Model
{
    use HasFactory;

    protected $fillable = ['adulto_id', 'respuestas'];

    // 👉 Un cuestionario pertenece a un adulto mayor
    public function adultoMayor()
    {
        return $this->belongsTo(AdultoMayor::class, 'adulto_id');
    }
}
