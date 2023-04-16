<?php

namespace App\Containers\AppSection\Action\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Action\Data\Repositories\ActionRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllActionsTask extends ParentTask
{
    public function __construct(
        protected ActionRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run($chatId): mixed
    {
        return $this->addRequestCriteria()->repository->findWhere(['chat_id' => $chatId]);
    }
}
