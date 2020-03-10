<?php

namespace App\Repositories;

use App\Models\libros;
use App\Repositories\BaseRepository;

/**
 * Class librosRepository
 * @package App\Repositories
 * @version March 7, 2020, 9:11 pm UTC
*/

class librosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'editorial',
        'fk_id_cliente'
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
        return libros::class;
    }
}
