<?php

namespace App\Http\Requests\API;

use App\Models\detalles_venta;
use InfyOm\Generator\Request\APIRequest;

class Updatedetalles_ventaAPIRequest extends APIRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = detalles_venta::$rules;
        
        return $rules;
    }
}
