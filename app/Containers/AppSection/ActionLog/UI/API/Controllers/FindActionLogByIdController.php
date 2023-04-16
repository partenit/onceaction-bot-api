<?php

namespace App\Containers\AppSection\ActionLog\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\ActionLog\Actions\FindActionLogByIdAction;
use App\Containers\AppSection\ActionLog\UI\API\Requests\FindActionLogByIdRequest;
use App\Containers\AppSection\ActionLog\UI\API\Transformers\ActionLogTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindActionLogByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findActionLogById(FindActionLogByIdRequest $request): array
    {
        $actionlog = app(FindActionLogByIdAction::class)->run($request);

        return $this->transform($actionlog, ActionLogTransformer::class);
    }
}
