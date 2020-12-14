<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Representa a un empleado que ingresa y pertenece a un área de la organización
 * 
 * @author José Camilo Jaimes Charry <jcjaimesc@unal.edu.co>
 * @version 20201213
 * 
 */
class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleado';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'primer_apellido', 'segundo_apellido', 'primer_nombre', 'otro_nombre', 'numero_identificacion', 'correo', 'estado', 'fecha_ingreso', 'fecha_registro', 'area_id', 'tipo_identificacion_id', 'pais_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
