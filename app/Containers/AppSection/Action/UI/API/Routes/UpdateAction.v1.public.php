<?php

/**
 * @apiGroup           Action
 * @apiName            UpdateAction
 *
 * @api                {PATCH} /v1/actions/:id Update Action
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

use App\Containers\AppSection\Action\UI\API\Controllers\UpdateActionController;
use Illuminate\Support\Facades\Route;

Route::patch('actions/{id}', [UpdateActionController::class, 'updateAction'])
    ->middleware(['auth:api']);

