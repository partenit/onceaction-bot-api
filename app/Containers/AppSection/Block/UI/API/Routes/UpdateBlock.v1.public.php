<?php

/**
 * @apiGroup           Block
 * @apiName            UpdateBlock
 *
 * @api                {PATCH} /v1/blocks/:id Update Block
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\AppSection\Block\UI\API\Controllers\UpdateBlockController;
use Illuminate\Support\Facades\Route;

Route::patch('blocks/{id}', [UpdateBlockController::class, 'updateBlock'])
    ->middleware(['auth:api']);

