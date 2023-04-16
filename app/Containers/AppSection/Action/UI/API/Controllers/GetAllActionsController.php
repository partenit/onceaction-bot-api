<?php

namespace App\Containers\AppSection\Action\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Action\Actions\GetAllActionsAction;
use App\Containers\AppSection\Action\UI\API\Requests\GetAllActionsRequest;
use App\Containers\AppSection\Action\UI\API\Transformers\ActionTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllActionsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllActions(GetAllActionsRequest $request): array
    {
        $actions = app(GetAllActionsAction::class)->run($request);

        return $this->transform($actions, ActionTransformer::class);
    }
}
