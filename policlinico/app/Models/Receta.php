<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdReceta';
    protected $table = 'receta';
    protected $fillable = ['IdCita','IdMedicamento','IdFrecuencia','CantidadDias'];
}
