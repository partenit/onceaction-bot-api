<?php

namespace App\Containers\AppSection\Block\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Block extends ParentModel
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
    protected string $resourceKey = 'Block';
}
