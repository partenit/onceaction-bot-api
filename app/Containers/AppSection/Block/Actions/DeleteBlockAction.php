<?php

namespace App\Containers\AppSection\Block\Actions;

use App\Containers\AppSection\Block\Tasks\DeleteBlockTask;
use App\Containers\AppSection\Block\UI\API\Requests\DeleteBlockRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteBlockAction extends ParentAction
{
    /**
     * @param DeleteBlockRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteBlockRequest $request): int
    {
        return app(DeleteBlockTask::class)->run($request->id);
    }
}
