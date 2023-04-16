<?php

namespace App\Containers\AppSection\ActionLog\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\ActionLog\Models\ActionLog;
use App\Containers\AppSection\ActionLog\Tasks\CreateActionLogTask;
use App\Containers\AppSection\ActionLog\UI\API\Requests\CreateActionLogRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateActionLogAction extends ParentAction
{
    /**
     * @param CreateActionLogRequest $request
     * @return ActionLog
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateActionLogRequest $request): ActionLog
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateActionLogTask::class)->run($data);
    }
}
