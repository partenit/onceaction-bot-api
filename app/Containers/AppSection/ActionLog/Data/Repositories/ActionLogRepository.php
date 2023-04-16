<?php

namespace App\Containers\AppSection\ActionLog\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class ActionLogRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
