<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Representa las diferentes áreas de la organización.
 * 
 * @author José Camilo Jaimes Charry <jcjaimesc@unal.edu.co>
 * @version 20201213
 * 
 */
class Area extends Model
{
    use HasFactory;

    protected $table = 'area';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre',
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
