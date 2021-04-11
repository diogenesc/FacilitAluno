<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    use HasFactory;

    /**
     * Retorna material do arquivo
     */
    public function material()
    {
        return $this->belongsTo(Material::class, 'id_arquivo');
    }
}
