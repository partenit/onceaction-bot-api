<?php

namespace App\Containers\AppSection\Block\UI\API\Transformers;

use App\Containers\AppSection\Block\Models\Block;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class BlockTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Block $block): array
    {
        $response = [
            'object' => $block->getResourceKey(),
            'id' => $block->getHashedKey(),
        ];

        return $this->ifAdmin([
            'real_id' => $block->id,
            'created_at' => $block->created_at,
            'updated_at' => $block->updated_at,
            'readable_created_at' => $block->created_at->diffForHumans(),
            'readable_updated_at' => $block->updated_at->diffForHumans(),
            // 'deleted_at' => $block->deleted_at,
        ], $response);
    }
}
