<?php

/**
 * @apiGroup           ActionLog
 * @apiName            FindActionLogById
 *
 * @api                {GET} /v1/action-logs/:id Find Action Log By Id
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

use App\Containers\AppSection\ActionLog\UI\API\Controllers\FindActionLogByIdController;
use Illuminate\Support\Facades\Route;

Route::get('action-logs/{id}', [FindActionLogByIdController::class, 'findActionLogById'])
    ->middleware(['auth:api']);

