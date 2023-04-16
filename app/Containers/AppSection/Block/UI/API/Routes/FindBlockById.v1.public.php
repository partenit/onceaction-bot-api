<?php

/**
 * @apiGroup           Block
 * @apiName            FindBlockById
 *
 * @api                {GET} /v1/blocks/:id Find Block By Id
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

use App\Containers\AppSection\Block\UI\API\Controllers\FindBlockByIdController;
use Illuminate\Support\Facades\Route;

Route::get('blocks/{id}', [FindBlockByIdController::class, 'findBlockById'])
    ->middleware(['auth:api']);

