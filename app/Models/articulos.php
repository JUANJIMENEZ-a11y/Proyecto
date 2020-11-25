<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class articulos
 * @package App\Models
 * @version November 22, 2020, 6:34 am UTC
 *
 * @property string $nombre
 * @property string $descripcion
 * @property integer $cantidad
 * @property integer $precio_por_unidad
 */
class articulos extends Model
{


    public $table = 'articulos';
    



    public $fillable = [
        'nombre',
        'descripcion',
        'cantidad',
        'precio_por_unidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'cantidad' => 'integer',
        'precio_por_unidad' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
