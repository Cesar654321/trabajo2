<?php

namespace App\Repositories;

use App\Models\cliente;
use App\Repositories\BaseRepository;

/**
 * Class clienteRepository
 * @package App\Repositories
 * @version March 5, 2020, 10:11 pm UTC
*/

class clienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion'
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
        return cliente::class;
    }
}
