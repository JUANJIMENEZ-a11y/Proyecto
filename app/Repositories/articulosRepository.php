<?php

namespace App\Repositories;

use App\Models\articulos;
use App\Repositories\BaseRepository;

/**
 * Class articulosRepository
 * @package App\Repositories
 * @version November 22, 2020, 6:34 am UTC
*/

class articulosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'cantidad',
        'precio_por_unidad'
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
        return articulos::class;
    }
}
