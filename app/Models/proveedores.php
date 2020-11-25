<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class proveedores
 * @package App\Models
 * @version November 22, 2020, 6:35 am UTC
 *
 * @property string $nombre
 */
class proveedores extends Model
{


    public $table = 'proveedores';
    



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
