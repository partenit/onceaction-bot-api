<?php

namespace App\Containers\AppSection\ActionLog\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\ActionLog\Tasks\GetAllActionLogsTask;
use App\Containers\AppSection\ActionLog\UI\API\Requests\GetAllActionLogsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllActionLogsAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllActionLogsRequest $request): mixed
    {
        return app(GetAllActionLogsTask::class)->run();
    }
}
