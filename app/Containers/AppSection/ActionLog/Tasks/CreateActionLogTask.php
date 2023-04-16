<?php

namespace App\Containers\AppSection\ActionLog\Tasks;

use App\Containers\AppSection\ActionLog\Data\Repositories\ActionLogRepository;
use App\Containers\AppSection\ActionLog\Models\ActionLog;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateActionLogTask extends ParentTask
{
    public function __construct(
        protected ActionLogRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): ActionLog
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
