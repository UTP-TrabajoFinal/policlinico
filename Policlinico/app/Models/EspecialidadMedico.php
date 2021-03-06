<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspecialidadMedico extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdEspecialidadMedico';
    protected $table = 'especialidad_medico';
    protected $fillable = ['IdEspecialidad ','IdMedico ','Estado'];
}
