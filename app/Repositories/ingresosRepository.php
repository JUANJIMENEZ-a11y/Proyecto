<?php

namespace App\Repositories;

use App\Models\ingresos;
use App\Repositories\BaseRepository;

/**
 * Class ingresosRepository
 * @package App\Repositories
 * @version November 22, 2020, 6:45 am UTC
*/

class ingresosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'total',
        'id_user',
        'id_proveedor'
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
        return ingresos::class;
    }
}
