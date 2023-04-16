<?php

namespace App\Containers\AppSection\Action\Tasks;

use App\Containers\AppSection\Action\Data\Repositories\ActionRepository;
use App\Containers\AppSection\Action\Models\Action;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindActionByIdTask extends ParentTask
{
    public function __construct(
        protected ActionRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Action
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
