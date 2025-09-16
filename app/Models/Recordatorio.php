<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recordatorio extends Model
{
    use HasFactory;

    protected $fillable = [
        'familiar_id',
        'adulto_id',
        'titulo',
        'descripcion',
        'fecha_hora',
    ];

    public function familiar()
    {
        return $this->belongsTo(User::class, 'familiar_id');
    }

    public function adulto()
    {
        return $this->belongsTo(User::class, 'adulto_id');
    }
}

