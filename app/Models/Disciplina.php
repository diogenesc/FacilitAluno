<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disciplina extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Retorna o curso da disciplina
     */
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'cursos_disciplinas', 'id_disciplina', 'id_curso');
    }

    /**
     * Retorna alunos de uma disciplina
     */
    public function alunos()
    {
        return $this->belongsToMany(Usuario::class, 'usuarios_disciplinas', 'id_disciplina', 'id_usuario');
    }
}
