<?php

namespace App\Containers\AppSection\ActionLog\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\ActionLog\Actions\CreateActionLogAction;
use App\Containers\AppSection\ActionLog\UI\API\Requests\CreateActionLogRequest;
use App\Containers\AppSection\ActionLog\UI\API\Transformers\ActionLogTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateActionLogController extends ApiController
{
    /**
     * @param CreateActionLogRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createActionLog(CreateActionLogRequest $request): JsonResponse
    {
        $actionlog = app(CreateActionLogAction::class)->run($request);

        return $this->created($this->transform($actionlog, ActionLogTransformer::class));
    }
}
