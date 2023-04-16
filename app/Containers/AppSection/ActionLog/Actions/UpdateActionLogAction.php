<?php

namespace App\Containers\AppSection\ActionLog\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\ActionLog\Models\ActionLog;
use App\Containers\AppSection\ActionLog\Tasks\UpdateActionLogTask;
use App\Containers\AppSection\ActionLog\UI\API\Requests\UpdateActionLogRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateActionLogAction extends ParentAction
{
    /**
     * @param UpdateActionLogRequest $request
     * @return ActionLog
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateActionLogRequest $request): ActionLog
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateActionLogTask::class)->run($data, $request->id);
    }
}
