<?php

namespace App\Containers\AppSection\ActionLog\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\ActionLog\Data\Repositories\ActionLogRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllActionLogsTask extends ParentTask
{
    public function __construct(
        protected ActionLogRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return $this->addRequestCriteria()->repository->paginate();
    }
}
