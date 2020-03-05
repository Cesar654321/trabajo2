<?php

namespace App\Repositories;

use App\Models\producto;
use App\Repositories\BaseRepository;

/**
 * Class productoRepository
 * @package App\Repositories
 * @version March 5, 2020, 10:07 pm UTC
*/

class productoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cantidad'
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
        return producto::class;
    }
}
