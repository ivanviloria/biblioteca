<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class autores
 * @package App\Models
 * @version March 7, 2020, 9:08 pm UTC
 *
 * @property string nombre
 * @property string apellido
 */
class autores extends Model
{

    public $table = 'autores';
    



    public $fillable = [
        'nombre',
        'apellido'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
