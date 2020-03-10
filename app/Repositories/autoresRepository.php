<?php

namespace App\Repositories;

use App\Models\autores;
use App\Repositories\BaseRepository;

/**
 * Class autoresRepository
 * @package App\Repositories
 * @version March 7, 2020, 9:08 pm UTC
*/

class autoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido'
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
        return autores::class;
    }
}
