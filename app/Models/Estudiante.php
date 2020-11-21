<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    //protected $table = 'estudiantes';

    protected $primaryKey = 'carnet';

    protected $fillable = [
    	'carnet',
    	'identificacion',
    	'tipo_id',
    	'nombre',
    	'nacio',
    	'correo',
    	'telefonos'
    ];

    protected $hidden = [
    	'created_at',
    	'updated_at'
    ];
}
