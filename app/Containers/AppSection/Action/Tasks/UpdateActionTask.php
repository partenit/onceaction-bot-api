<?php

namespace App\Containers\AppSection\Action\Tasks;

use App\Containers\AppSection\Action\Data\Repositories\ActionRepository;
use App\Containers\AppSection\Action\Models\Action;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateActionTask extends ParentTask
{
    public function __construct(
        protected ActionRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Action
    {
        try {
            return $this->repository->update($data, $id);
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
