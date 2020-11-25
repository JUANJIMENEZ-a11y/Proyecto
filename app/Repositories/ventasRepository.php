<?php

namespace App\Repositories;

use App\Models\ventas;
use App\Repositories\BaseRepository;

/**
 * Class ventasRepository
 * @package App\Repositories
 * @version November 22, 2020, 6:55 am UTC
*/

class ventasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'total',
        'id_cliente',
        'id_usuario'
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
        return ventas::class;
    }
}
