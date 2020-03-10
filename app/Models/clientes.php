<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class clientes
 * @package App\Models
 * @version March 7, 2020, 9:06 pm UTC
 *
 * @property integer cedula
 * @property string nombre
 * @property string apellido
 * @property string telefono
 */
class clientes extends Model
{

    public $table = 'clientes';
    



    public $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cedula' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
