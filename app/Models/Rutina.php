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
    public function adulto()
    {
        return $this->belongsTo(Adulto::class, 'adulto_id');
    }
        public function familiar()
    {
        return $this->belongsTo(User::class, 'familiar_id');
    }

}
