<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdUsuario';
    protected $table = 'usuario';
    protected $fillable = ['Usuario','Password','IdTipoUsuario'];
}
