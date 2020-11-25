<?php

namespace App\Repositories;

use App\Models\detalles_venta;
use App\Repositories\BaseRepository;

/**
 * Class detalles_ventaRepository
 * @package App\Repositories
 * @version November 22, 2020, 6:58 am UTC
*/

class detalles_ventaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cantidad',
        'precio',
        'id_venta',
        'id_articulo'
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
        return detalles_venta::class;
    }
}
