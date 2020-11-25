<?php

namespace App\Repositories;

use App\Models\proveedores;
use App\Repositories\BaseRepository;

/**
 * Class proveedoresRepository
 * @package App\Repositories
 * @version November 22, 2020, 6:35 am UTC
*/

class proveedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return proveedores::class;
    }
}
