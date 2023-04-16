<?php

namespace App\Containers\AppSection\ActionLog\UI\API\Transformers;

use App\Containers\AppSection\ActionLog\Models\ActionLog;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ActionLogTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(ActionLog $actionlog): array
    {
        $response = [
            'object' => $actionlog->getResourceKey(),
            'id' => $actionlog->getHashedKey(),
        ];

        return $this->ifAdmin([
            'real_id' => $actionlog->id,
            'created_at' => $actionlog->created_at,
            'updated_at' => $actionlog->updated_at,
            'readable_created_at' => $actionlog->created_at->diffForHumans(),
            'readable_updated_at' => $actionlog->updated_at->diffForHumans(),
            // 'deleted_at' => $actionlog->deleted_at,
        ], $response);
    }
}
