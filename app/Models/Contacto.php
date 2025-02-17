<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contacto'; // Nombre de la tabla en tu base de datos

    protected $fillable = ['nombre', 'email', 'asunto', 'mensaje'];
}