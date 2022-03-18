<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $table = 'dates';
    protected $primaryKey = 'id';
    protected $fillable = ['cedula_dueño', 'nombres_dueño', 'apellidos_dueño','nombre_mascota','fecha_cita','hora_cita'];
}
