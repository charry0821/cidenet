<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Representa los diferentes paises asociados a la creación de un empleado.
 * 
 * @author José Camilo Jaimes Charry <jcjaimesc@unal.edu.co>
 * @version 20201213
 * 
 */
class Pais extends Model
{
    use HasFactory;

    protected $table = 'pais';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre', 'abreviacion', 'dominio',
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
