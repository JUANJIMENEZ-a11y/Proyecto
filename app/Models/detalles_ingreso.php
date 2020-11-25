<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class detalles_ingreso
 * @package App\Models
 * @version November 22, 2020, 6:51 am UTC
 *
 * @property \App\Models\ingresos $ingresos
 * @property \App\Models\articulos $articulos
 * @property integer $cantidad
 * @property integer $precio
 * @property integer $id_ingreso
 * @property integer $id_articulo
 */
class detalles_ingreso extends Model
{


    public $table = 'detalles_ingreso';
    



    public $fillable = [
        'cantidad',
        'precio',
        'id_ingreso',
        'id_articulo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cantidad' => 'integer',
        'precio' => 'integer',
        'id_ingreso' => 'integer',
        'id_articulo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function ingresos()
    {
        return $this->hasOne(\App\Models\ingresos::class, 'id', 'id_ingreso');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function articulos()
    {
        return $this->hasOne(\App\Models\articulos::class, 'id', 'id_articulo');
    }
}
