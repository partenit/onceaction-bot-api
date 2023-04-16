<?php

namespace App\Containers\AppSection\Action\Actions;

use App\Containers\AppSection\Action\Tasks\DeleteActionTask;
use App\Containers\AppSection\Action\UI\API\Requests\DeleteActionRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteActionAction extends ParentAction
{
    /**
     * @param DeleteActionRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteActionRequest $request): int
    {
        return app(DeleteActionTask::class)->run($request->id);
    }
}
