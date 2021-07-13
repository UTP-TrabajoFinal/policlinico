<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaEstudios extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdFichaEstudios';
    protected $table = 'ficha_estudios';
    protected $fillable = ['Grado','Institucion','Inicio','Fin'];
}
