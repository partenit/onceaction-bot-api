<?php

namespace App\Containers\AppSection\Block\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Block\Models\Block;
use App\Containers\AppSection\Block\Tasks\CreateBlockTask;
use App\Containers\AppSection\Block\UI\API\Requests\CreateBlockRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateBlockAction extends ParentAction
{
    /**
     * @param CreateBlockRequest $request
     * @return Block
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateBlockRequest $request): Block
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateBlockTask::class)->run($data);
    }
}
