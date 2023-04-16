<?php

namespace App\Containers\AppSection\Action\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Action extends ParentModel
{
    protected $fillable = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Action';
}
