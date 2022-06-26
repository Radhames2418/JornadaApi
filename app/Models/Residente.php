<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residente extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nombre', 'apellidos', 'telefono', 'correo', 'edad', 'direccion', 'comida_entregable', 'observacion'];  
    
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
