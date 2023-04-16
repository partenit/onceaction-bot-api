<?php

namespace App\Containers\AppSection\Action\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Action\Data\Repositories\ActionRepository;
use App\Containers\AppSection\Action\Models\TelegraphChat;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetChatIdByBotUserId extends ParentTask
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run($chatId): mixed
    {
        $chat = TelegraphChat::where('chat_id', $chatId)->first();

        return $chat->id ?? 0;
    }
}
