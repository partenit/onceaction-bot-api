<?php

namespace App\Containers\AppSection\ActionLog\Tasks;

use App\Containers\AppSection\ActionLog\Data\Repositories\ActionLogRepository;
use App\Containers\AppSection\ActionLog\Models\ActionLog;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateActionLogTask extends ParentTask
{
    public function __construct(
        protected ActionLogRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): ActionLog
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
