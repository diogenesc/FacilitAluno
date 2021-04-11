<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /**
     * Retorna a instituicao do curso
     */
    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class, 'id_instituicao');
    }

    /**
     * Retorna disciplinas de um curso
     */
    public function disciplinas()
    {
        return $this->belongsToMany(Disciplina::class, 'cursos_disciplinas', 'id_curso', 'id_disciplina');
    }

    /**
     * Retorna alunos de um curso
     */
    public function alunos()
    {
        return $this->belongsToMany(Usuario::class, 'usuarios_cursos', 'id_curso', 'id_usuario');
    }
}
