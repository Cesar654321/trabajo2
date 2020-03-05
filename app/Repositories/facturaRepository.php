<?php

namespace App\Repositories;

use App\Models\factura;
use App\Repositories\BaseRepository;

/**
 * Class facturaRepository
 * @package App\Repositories
 * @version March 5, 2020, 10:13 pm UTC
*/

class facturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nit',
        'tienda'
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
        return factura::class;
    }
}
