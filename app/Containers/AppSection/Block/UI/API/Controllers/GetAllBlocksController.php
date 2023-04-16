<?php

namespace App\Containers\AppSection\Block\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Block\Actions\GetAllBlocksAction;
use App\Containers\AppSection\Block\UI\API\Requests\GetAllBlocksRequest;
use App\Containers\AppSection\Block\UI\API\Transformers\BlockTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllBlocksController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllBlocks(GetAllBlocksRequest $request): array
    {
        $blocks = app(GetAllBlocksAction::class)->run($request);

        return $this->transform($blocks, BlockTransformer::class);
    }
}
