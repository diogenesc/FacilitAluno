<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'prioridade'
    ];

    /**
     * Retorna usuario
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
