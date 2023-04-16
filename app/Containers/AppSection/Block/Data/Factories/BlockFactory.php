<?php

namespace App\Containers\AppSection\Block\Data\Factories;

use App\Containers\AppSection\Block\Models\Block;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class BlockFactory extends ParentFactory
{
    protected $model = Block::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
