<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class ventas
 * @package App\Models
 * @version November 22, 2020, 6:55 am UTC
 *
 * @property \App\Models\clientes $clientes
 * @property \App\Models\users $users
 * @property string $fecha
 * @property integer $total
 * @property integer $id_cliente
 * @property integer $id_usuario
 */
class ventas extends Model
{


    public $table = 'ventas';
    



    public $fillable = [
        'fecha',
        'total',
        'id_cliente',
        'id_usuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha' => 'date',
        'total' => 'integer',
        'id_cliente' => 'integer',
        'id_usuario' => 'integer'
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
    public function clientes()
    {
        return $this->hasOne(\App\Models\clientes::class, 'id', 'id_cliente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function users()
    {
        return $this->hasOne(\App\Models\users::class, 'id', 'id_usuario');
    }
}
