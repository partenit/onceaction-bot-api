<?php

namespace App\Containers\AppSection\Block\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class BlockRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
