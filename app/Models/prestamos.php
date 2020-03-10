<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class prestamos
 * @package App\Models
 * @version March 7, 2020, 9:13 pm UTC
 *
 * @property integer fk_id_libro
 * @property string fecha_prestamo
 */
class prestamos extends Model
{

    public $table = 'prestamos';
    



    public $fillable = [
        'fk_id_libro',
        'fecha_prestamo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_prestamo' => 'integer',
        'fk_id_libro' => 'integer',
        'fecha_prestamo' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
