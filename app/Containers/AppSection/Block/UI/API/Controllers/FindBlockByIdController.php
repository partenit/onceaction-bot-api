<?php

namespace App\Containers\AppSection\Block\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Block\Actions\FindBlockByIdAction;
use App\Containers\AppSection\Block\UI\API\Requests\FindBlockByIdRequest;
use App\Containers\AppSection\Block\UI\API\Transformers\BlockTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindBlockByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findBlockById(FindBlockByIdRequest $request): array
    {
        $block = app(FindBlockByIdAction::class)->run($request);

        return $this->transform($block, BlockTransformer::class);
    }
}
