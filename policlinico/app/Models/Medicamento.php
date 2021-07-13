<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdMedicamento';
    protected $table = 'medicamento';
    protected $fillable = ['NombreMedicamento','Presentacion'];
}
