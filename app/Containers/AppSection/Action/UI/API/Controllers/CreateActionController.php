<?php

namespace App\Containers\AppSection\Action\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Action\Actions\CreateActionAction;
use App\Containers\AppSection\Action\UI\API\Requests\CreateActionRequest;
use App\Containers\AppSection\Action\UI\API\Transformers\ActionTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateActionController extends ApiController
{
    /**
     * @param CreateActionRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createAction(CreateActionRequest $request): JsonResponse
    {
        $action = app(CreateActionAction::class)->run($request);

        return $this->created($this->transform($action, ActionTransformer::class));
    }
}
