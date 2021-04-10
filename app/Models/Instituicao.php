<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'instituicoes';

    /**
     * Retorna cursos de uma instituição
     */
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_instituicao');
    }
}
