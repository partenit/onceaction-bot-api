<?php

namespace App\Containers\AppSection\Block\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Block\Models\Block;
use App\Containers\AppSection\Block\Tasks\UpdateBlockTask;
use App\Containers\AppSection\Block\UI\API\Requests\UpdateBlockRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateBlockAction extends ParentAction
{
    /**
     * @param UpdateBlockRequest $request
     * @return Block
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateBlockRequest $request): Block
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateBlockTask::class)->run($data, $request->id);
    }
}
