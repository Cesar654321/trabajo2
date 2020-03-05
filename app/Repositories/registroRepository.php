<?php

namespace App\Repositories;

use App\Models\registro;
use App\Repositories\BaseRepository;

/**
 * Class registroRepository
 * @package App\Repositories
 * @version March 5, 2020, 10:15 pm UTC
*/

class registroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idfactura',
        'idcliente',
        'idproducto'
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
        return registro::class;
    }
}
