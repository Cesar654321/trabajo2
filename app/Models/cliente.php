<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class cliente
 * @package App\Models
 * @version March 5, 2020, 10:11 pm UTC
 *
 * @property string nombre
 * @property string direccion
 */
class cliente extends Model
{

    public $table = 'cliente';
    



    public $fillable = [
        'nombre',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
