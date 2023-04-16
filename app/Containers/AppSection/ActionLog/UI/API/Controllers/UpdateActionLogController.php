<?php

namespace App\Containers\AppSection\ActionLog\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\ActionLog\Actions\UpdateActionLogAction;
use App\Containers\AppSection\ActionLog\UI\API\Requests\UpdateActionLogRequest;
use App\Containers\AppSection\ActionLog\UI\API\Transformers\ActionLogTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateActionLogController extends ApiController
{
    /**
     * @param UpdateActionLogRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateActionLog(UpdateActionLogRequest $request): array
    {
        $actionlog = app(UpdateActionLogAction::class)->run($request);

        return $this->transform($actionlog, ActionLogTransformer::class);
    }
}
