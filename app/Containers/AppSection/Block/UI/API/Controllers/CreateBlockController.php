<?php

namespace App\Containers\AppSection\Block\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Block\Actions\CreateBlockAction;
use App\Containers\AppSection\Block\UI\API\Requests\CreateBlockRequest;
use App\Containers\AppSection\Block\UI\API\Transformers\BlockTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateBlockController extends ApiController
{
    /**
     * @param CreateBlockRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createBlock(CreateBlockRequest $request): JsonResponse
    {
        $block = app(CreateBlockAction::class)->run($request);

        return $this->created($this->transform($block, BlockTransformer::class));
    }
}
