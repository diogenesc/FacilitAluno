<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'email',
        'password',
        'flag_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Retorna anotacoes do usuario
     */
    public function anotacoes()
    {
        return $this->hasMany(Anotacao::class, 'id_usuario');
    }

    /**
     * Retorna atividades do usuario
     */
    public function atividades()
    {
        return $this->hasMany(Atividade::class, 'id_usuario');
    }

    /**
     * Retorna curso do usuario
     */
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_usuario');
    }

    /**
     * Retorna disciplinas do usuario
     */
    public function disciplinas()
    {
        return $this->hasMany(Disciplina::class, 'id_usuario');
    }

    /**
     * Retorna materiais do usuario
     */
    public function materiais()
    {
        return $this->hasMany(Material::class, 'id_usuario');
    }

    /**
     * Retorna metas do usuario
     */
    public function metas()
    {
        return $this->hasMany(Meta::class, 'id_usuario');
    }
}
