<?php

namespace App\Containers\AppSection\Action\Actions;

use App\Containers\AppSection\Action\Models\Action;
use App\Containers\AppSection\Action\Tasks\FindActionByIdTask;
use App\Containers\AppSection\Action\UI\API\Requests\FindActionByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindActionByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindActionByIdRequest $request): Action
    {
        return app(FindActionByIdTask::class)->run($request->id);
    }
}
