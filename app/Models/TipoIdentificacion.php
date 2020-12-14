<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Representa los diferentes tipos de identificacion que se pueden registrar.
 * 
 * @author José Camilo Jaimes Charry <jcjaimesc@unal.edu.co>
 * @version 20201213
 * 
 */
class TipoIdentificacion extends Model
{
    use HasFactory;

    protected $table = 'tipo_identificacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre', 'abreviacion'
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
