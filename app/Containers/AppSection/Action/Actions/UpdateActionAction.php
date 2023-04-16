<?php

namespace App\Containers\AppSection\Action\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Action\Models\Action;
use App\Containers\AppSection\Action\Tasks\UpdateActionTask;
use App\Containers\AppSection\Action\UI\API\Requests\UpdateActionRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateActionAction extends ParentAction
{
    /**
     * @param UpdateActionRequest $request
     * @return Action
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateActionRequest $request): Action
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateActionTask::class)->run($data, $request->id);
    }
}
