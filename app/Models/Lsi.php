<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Lsi
 * @package App\Models
 * @version October 24, 2021, 2:32 pm UTC
 *
 * @property string $Firstname
 * @property string $Middlename
 * @property string $Lastname
 * @property string $Birthdate
 * @property string $Gender
 * @property string $Address
 * @property string $Citizenship
 */
class Lsi extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'table_lsi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Firstname',
        'Middlename',
        'Lastname',
        'Birthdate',
        'Gender',
        'Address',
        'Citizenship'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Firstname' => 'string',
        'Middlename' => 'string',
        'Lastname' => 'string',
        'Birthdate' => 'date',
        'Gender' => 'string',
        'Address' => 'string',
        'Citizenship' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Firstname' => 'nullable|string|max:60',
        'Middlename' => 'nullable|string|max:60',
        'Lastname' => 'nullable|string|max:60',
        'Birthdate' => 'nullable',
        'Gender' => 'nullable|string|max:12',
        'Address' => 'nullable|string|max:500',
        'Citizenship' => 'nullable|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
