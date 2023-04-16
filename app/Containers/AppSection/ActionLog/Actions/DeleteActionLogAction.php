<?php

namespace App\Containers\AppSection\ActionLog\Actions;

use App\Containers\AppSection\ActionLog\Tasks\DeleteActionLogTask;
use App\Containers\AppSection\ActionLog\UI\API\Requests\DeleteActionLogRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteActionLogAction extends ParentAction
{
    /**
     * @param DeleteActionLogRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteActionLogRequest $request): int
    {
        return app(DeleteActionLogTask::class)->run($request->id);
    }
}
