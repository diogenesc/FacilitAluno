<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    /**
     * Retorna o curso da disciplina
     */
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'cursos_disciplina', 'id_disciplina', 'id_curso');
    }

    /**
     * Retorna alunos de uma disciplina
     */
    public function alunos()
    {
        return $this->belongsToMany(Usuario::class, 'usuarios_disciplinas', 'id_disciplina', 'id_usuario');
    }
}
