<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdCita';
    protected $table = 'cita';
    protected $fillable = ['IdPaciente','IdEspecialidadMedico','FechaCita','HoraInicio','HoraFin','Estado'];
}
