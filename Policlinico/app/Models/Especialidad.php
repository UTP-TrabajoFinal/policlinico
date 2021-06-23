<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdEspecialidad';
    protected $table = 'especialidad';
    protected $fillable = ['IdEspecialidad','NombreEspecialidad','Descripcion','Foto'];
}
