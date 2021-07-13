<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaExperiencia extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdFichaExperiencia';
    protected $table = 'ficha_experiencia';
    protected $fillable = ['Institucion','Cargo','Inicio','Fin'];
}
