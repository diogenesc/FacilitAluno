<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'materiais';

    protected $fillable = [
        'nome'
    ];

    /**
     * Retorna usuario
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    /**
     * Retorna arquivo do material
     */
    public function arquivo()
    {
        return $this->belongsTo(Arquivo::class, 'id_arquivo');
    }
}
