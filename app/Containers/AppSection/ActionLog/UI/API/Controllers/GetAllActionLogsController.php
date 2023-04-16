<?php

namespace App\Containers\AppSection\ActionLog\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\ActionLog\Actions\GetAllActionLogsAction;
use App\Containers\AppSection\ActionLog\UI\API\Requests\GetAllActionLogsRequest;
use App\Containers\AppSection\ActionLog\UI\API\Transformers\ActionLogTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllActionLogsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllActionLogs(GetAllActionLogsRequest $request): array
    {
        $actionlogs = app(GetAllActionLogsAction::class)->run($request);

        return $this->transform($actionlogs, ActionLogTransformer::class);
    }
}
