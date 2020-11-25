<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class ingresos
 * @package App\Models
 * @version November 22, 2020, 6:45 am UTC
 *
 * @property \App\Models\users $users
 * @property \App\Models\proveedores $proveedores
 * @property string $fecha
 * @property integer $total
 * @property integer $id_user
 * @property integer $id_proveedor
 */
class ingresos extends Model
{


    public $table = 'ingresos';
    



    public $fillable = [
        'fecha',
        'total',
        'id_user',
        'id_proveedor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha' => 'string',
        'total' => 'integer',
        'id_user' => 'integer',
        'id_proveedor' => 'integer'
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
    public function users()
    {
        return $this->hasOne(\App\Models\users::class, 'id', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function proveedores()
    {
        return $this->hasOne(\App\Models\proveedores::class, 'id', 'id_proveedor');
    }
}
