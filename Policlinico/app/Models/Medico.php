<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdMedico';
    protected $table = 'medico';
    protected $fillable = ['DNI','Nombres','Apellidos','FechaIngreso','URL','IdUsuario'];
}
