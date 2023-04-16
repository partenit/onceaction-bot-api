<?php

namespace App\Containers\AppSection\ActionLog\Data\Factories;

use App\Containers\AppSection\ActionLog\Models\ActionLog;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class ActionLogFactory extends ParentFactory
{
    protected $model = ActionLog::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
