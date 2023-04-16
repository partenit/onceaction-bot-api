<?php

namespace App\Containers\AppSection\Action\UI\API\Transformers;

use App\Containers\AppSection\Action\Models\Action;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ActionTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Action $action): array
    {
        $response = [
            'name' => $action->name,
            'id' => $action->id,
            'chat_id' => $action->chat_id,
        ];

        return $response;

/*        return $this->ifAdmin([
            'real_id' => $action->id,
            'created_at' => $action->created_at,
            'updated_at' => $action->updated_at,
            'readable_created_at' => $action->created_at->diffForHumans(),
            'readable_updated_at' => $action->updated_at->diffForHumans(),
            // 'deleted_at' => $action->deleted_at,
        ], $response);*/
    }
}
