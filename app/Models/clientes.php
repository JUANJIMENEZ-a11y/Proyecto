<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class clientes
 * @package App\Models
 * @version November 22, 2020, 6:30 am UTC
 *
 * @property string $nombre
 * @property integer $direccion
 * @property integer $telefono
 */
class clientes extends Model
{


    public $table = 'clientes';
    



    public $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'direccion' => 'integer',
        'telefono' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
