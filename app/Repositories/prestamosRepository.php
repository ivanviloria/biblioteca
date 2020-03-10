<?php

namespace App\Repositories;

use App\Models\prestamos;
use App\Repositories\BaseRepository;

/**
 * Class prestamosRepository
 * @package App\Repositories
 * @version March 7, 2020, 9:13 pm UTC
*/

class prestamosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fk_id_libro',
        'fecha_prestamo'
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
        return prestamos::class;
    }
}
