<?php

namespace App\Containers\AppSection\Action\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Action\Models\Action;
use App\Containers\AppSection\Action\Tasks\CreateActionTask;
use App\Containers\AppSection\Action\UI\API\Requests\CreateActionRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateActionAction extends ParentAction
{
    /**
     * @param CreateActionRequest $request
     * @return Action
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateActionRequest $request): Action
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateActionTask::class)->run($data);
    }
}
