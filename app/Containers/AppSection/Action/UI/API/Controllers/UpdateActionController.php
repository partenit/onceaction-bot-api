<?php

namespace App\Containers\AppSection\Action\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Action\Actions\UpdateActionAction;
use App\Containers\AppSection\Action\UI\API\Requests\UpdateActionRequest;
use App\Containers\AppSection\Action\UI\API\Transformers\ActionTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateActionController extends ApiController
{
    /**
     * @param UpdateActionRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateAction(UpdateActionRequest $request): array
    {
        $action = app(UpdateActionAction::class)->run($request);

        return $this->transform($action, ActionTransformer::class);
    }
}
