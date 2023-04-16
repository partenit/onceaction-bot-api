<?php

namespace App\Containers\AppSection\ActionLog\UI\API\Controllers;

use App\Containers\AppSection\ActionLog\Actions\DeleteActionLogAction;
use App\Containers\AppSection\ActionLog\UI\API\Requests\DeleteActionLogRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteActionLogController extends ApiController
{
    /**
     * @param DeleteActionLogRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteActionLog(DeleteActionLogRequest $request): JsonResponse
    {
        app(DeleteActionLogAction::class)->run($request);

        return $this->noContent();
    }
}
