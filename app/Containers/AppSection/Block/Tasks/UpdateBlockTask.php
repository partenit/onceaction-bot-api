<?php

namespace App\Containers\AppSection\Block\Tasks;

use App\Containers\AppSection\Block\Data\Repositories\BlockRepository;
use App\Containers\AppSection\Block\Models\Block;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateBlockTask extends ParentTask
{
    public function __construct(
        protected BlockRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Block
    {
        try {
            return $this->repository->update($data, $id);
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
