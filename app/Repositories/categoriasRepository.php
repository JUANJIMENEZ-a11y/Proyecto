<?php

namespace App\Repositories;

use App\Models\categorias;
use App\Repositories\BaseRepository;

/**
 * Class categoriasRepository
 * @package App\Repositories
 * @version November 22, 2020, 6:36 am UTC
*/

class categoriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
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
        return categorias::class;
    }
}
