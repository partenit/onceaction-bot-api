<?php

namespace App\Containers\AppSection\Block\Tasks;

use App\Containers\AppSection\Block\Data\Repositories\BlockRepository;
use App\Containers\AppSection\Block\Models\Block;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateBlockTask extends ParentTask
{
    public function __construct(
        protected BlockRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Block
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
