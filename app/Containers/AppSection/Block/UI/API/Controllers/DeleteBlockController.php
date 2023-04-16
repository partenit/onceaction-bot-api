<?php

namespace App\Containers\AppSection\Block\UI\API\Controllers;

use App\Containers\AppSection\Block\Actions\DeleteBlockAction;
use App\Containers\AppSection\Block\UI\API\Requests\DeleteBlockRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteBlockController extends ApiController
{
    /**
     * @param DeleteBlockRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteBlock(DeleteBlockRequest $request): JsonResponse
    {
        app(DeleteBlockAction::class)->run($request);

        return $this->noContent();
    }
}
