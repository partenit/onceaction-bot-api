<?php

namespace App\Containers\AppSection\Block\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Block\Tasks\GetAllBlocksTask;
use App\Containers\AppSection\Block\UI\API\Requests\GetAllBlocksRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllBlocksAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllBlocksRequest $request): mixed
    {
        return app(GetAllBlocksTask::class)->run();
    }
}
