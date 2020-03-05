<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class factura
 * @package App\Models
 * @version March 5, 2020, 10:13 pm UTC
 *
 * @property integer nit
 * @property string tienda
 */
class factura extends Model
{

    public $table = 'factura';
    



    public $fillable = [
        'nit',
        'tienda'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nit' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
