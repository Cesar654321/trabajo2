<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class producto
 * @package App\Models
 * @version March 5, 2020, 10:07 pm UTC
 *
 * @property integer cantidad
 */
class producto extends Model
{

    public $table = 'producto';
    



    public $fillable = [
        'cantidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cantidad' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
