<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class categorias
 * @package App\Models
 * @version November 22, 2020, 6:36 am UTC
 *
 * @property string $nombre
 * @property integer $descripcion
 */
class categorias extends Model
{


    public $table = 'categorias';
    



    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
