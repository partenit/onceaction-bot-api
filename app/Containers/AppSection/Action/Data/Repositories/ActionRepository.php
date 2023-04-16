<?php

namespace App\Containers\AppSection\Action\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class ActionRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
