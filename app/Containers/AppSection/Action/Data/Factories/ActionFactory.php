<?php

namespace App\Containers\AppSection\Action\Data\Factories;

use App\Containers\AppSection\Action\Models\Action;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class ActionFactory extends ParentFactory
{
    protected $model = Action::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
