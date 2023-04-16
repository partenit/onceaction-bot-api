<?php

/**
 * @apiGroup           Block
 * @apiName            CreateBlock
 *
 * @api                {POST} /v1/blocks Create Block
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

use App\Containers\AppSection\Block\UI\API\Controllers\CreateBlockController;
use Illuminate\Support\Facades\Route;

Route::post('blocks', [CreateBlockController::class, 'createBlock'])
    ->middleware(['auth:api']);

