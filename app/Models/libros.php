<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class libros
 * @package App\Models
 * @version March 7, 2020, 9:11 pm UTC
 *
 * @property string titulo
 * @property string editorial
 * @property integer fk_id_cliente
 */
class libros extends Model
{

    public $table = 'libros';
    



    public $fillable = [
        'titulo',
        'editorial',
        'fk_id_cliente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'editorial' => 'string',
        'fk_id_cliente' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
