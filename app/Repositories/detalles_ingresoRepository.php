<?php

namespace App\Repositories;

use App\Models\detalles_ingreso;
use App\Repositories\BaseRepository;

/**
 * Class detalles_ingresoRepository
 * @package App\Repositories
 * @version November 22, 2020, 6:51 am UTC
*/

class detalles_ingresoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cantidad',
        'precio',
        'id_ingreso',
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
        return detalles_ingreso::class;
    }
}
