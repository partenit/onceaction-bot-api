<?php

namespace App\Containers\AppSection\ActionLog\Actions;

use App\Containers\AppSection\ActionLog\Models\ActionLog;
use App\Containers\AppSection\ActionLog\Tasks\FindActionLogByIdTask;
use App\Containers\AppSection\ActionLog\UI\API\Requests\FindActionLogByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindActionLogByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindActionLogByIdRequest $request): ActionLog
    {
        return app(FindActionLogByIdTask::class)->run($request->id);
    }
}
