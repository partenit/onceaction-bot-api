<?php

namespace App\Containers\AppSection\Block\Tasks;

use App\Containers\AppSection\Block\Data\Repositories\BlockRepository;
use App\Containers\AppSection\Block\Models\Block;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindBlockByIdTask extends ParentTask
{
    public function __construct(
        protected BlockRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Block
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
