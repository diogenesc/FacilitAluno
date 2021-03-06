<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'prioridade',
        'marcador',
        'cor',
        'data_inicio',
        'data_fim',
        'alarme'
    ];

    /**
     * Retorna usuario
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
