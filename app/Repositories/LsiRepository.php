<?php

namespace App\Repositories;

use App\Models\Lsi;
use App\Repositories\BaseRepository;

/**
 * Class LsiRepository
 * @package App\Repositories
 * @version October 24, 2021, 2:32 pm UTC
*/

class LsiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Firstname',
        'Middlename',
        'Lastname',
        'Birthdate',
        'Gender',
        'Address',
        'Citizenship'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lsi::class;
    }
}
