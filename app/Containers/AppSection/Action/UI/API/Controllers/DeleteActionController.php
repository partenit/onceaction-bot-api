<?php

namespace App\Containers\AppSection\Action\UI\API\Controllers;

use App\Containers\AppSection\Action\Actions\DeleteActionAction;
use App\Containers\AppSection\Action\UI\API\Requests\DeleteActionRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteActionController extends ApiController
{
    /**
     * @param DeleteActionRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteAction(DeleteActionRequest $request): JsonResponse
    {
        app(DeleteActionAction::class)->run($request);

        return $this->noContent();
    }
}
