<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class registro
 * @package App\Models
 * @version March 5, 2020, 10:15 pm UTC
 *
 * @property integer idfactura
 * @property integer idcliente
 * @property integer idproducto
 */
class registro extends Model
{

    public $table = 'registro';
    



    public $fillable = [
        'idfactura',
        'idcliente',
        'idproducto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idfactura' => 'integer',
        'idcliente' => 'integer',
        'idproducto' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
