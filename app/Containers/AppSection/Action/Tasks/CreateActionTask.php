<?php

namespace App\Containers\AppSection\Action\Tasks;

use App\Containers\AppSection\Action\Data\Repositories\ActionRepository;
use App\Containers\AppSection\Action\Models\Action;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateActionTask extends ParentTask
{
    public function __construct(
        protected ActionRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Action
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
