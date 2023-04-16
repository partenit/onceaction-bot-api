<?php

namespace App\Containers\AppSection\ActionLog\Tasks;

use App\Containers\AppSection\ActionLog\Data\Repositories\ActionLogRepository;
use App\Containers\AppSection\ActionLog\Models\ActionLog;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindActionLogByIdTask extends ParentTask
{
    public function __construct(
        protected ActionLogRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): ActionLog
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
