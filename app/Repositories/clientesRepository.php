<?php

namespace App\Repositories;

use App\Models\clientes;
use App\Repositories\BaseRepository;

/**
 * Class clientesRepository
 * @package App\Repositories
 * @version March 7, 2020, 9:06 pm UTC
*/

class clientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cedula',
        'nombre',
        'apellido',
        'telefono'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clientes::class;
    }
}
