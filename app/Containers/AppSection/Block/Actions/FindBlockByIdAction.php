<?php

namespace App\Containers\AppSection\Block\Actions;

use App\Containers\AppSection\Block\Models\Block;
use App\Containers\AppSection\Block\Tasks\FindBlockByIdTask;
use App\Containers\AppSection\Block\UI\API\Requests\FindBlockByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindBlockByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindBlockByIdRequest $request): Block
    {
        return app(FindBlockByIdTask::class)->run($request->id);
    }
}
