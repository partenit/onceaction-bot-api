<?php

namespace App\Containers\AppSection\Action\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Action\Actions\FindActionByIdAction;
use App\Containers\AppSection\Action\UI\API\Requests\FindActionByIdRequest;
use App\Containers\AppSection\Action\UI\API\Transformers\ActionTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindActionByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findActionById(FindActionByIdRequest $request): array
    {
        $action = app(FindActionByIdAction::class)->run($request);

        return $this->transform($action, ActionTransformer::class);
    }
}
