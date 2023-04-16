<?php

namespace App\Containers\AppSection\Block\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Block\Data\Repositories\BlockRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllBlocksTask extends ParentTask
{
    public function __construct(
        protected BlockRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return $this->addRequestCriteria()->repository->paginate();
    }
}
