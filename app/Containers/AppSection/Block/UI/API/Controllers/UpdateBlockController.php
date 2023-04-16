<?php

namespace App\Containers\AppSection\Block\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Block\Actions\UpdateBlockAction;
use App\Containers\AppSection\Block\UI\API\Requests\UpdateBlockRequest;
use App\Containers\AppSection\Block\UI\API\Transformers\BlockTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateBlockController extends ApiController
{
    /**
     * @param UpdateBlockRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateBlock(UpdateBlockRequest $request): array
    {
        $block = app(UpdateBlockAction::class)->run($request);

        return $this->transform($block, BlockTransformer::class);
    }
}
