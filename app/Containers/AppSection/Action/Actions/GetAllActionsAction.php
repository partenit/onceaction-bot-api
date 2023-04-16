<?php

namespace App\Containers\AppSection\Action\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Action\Tasks\GetAllActionsTask;
use App\Containers\AppSection\Action\Tasks\GetChatIdByBotUserId;
use App\Containers\AppSection\Action\UI\API\Requests\GetAllActionsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllActionsAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllActionsRequest $request): mixed
    {
        $chatId = app(GetChatIdByBotUserId::class)->run($request->chat_id);

        return app(GetAllActionsTask::class)->run($chatId);
    }
}
