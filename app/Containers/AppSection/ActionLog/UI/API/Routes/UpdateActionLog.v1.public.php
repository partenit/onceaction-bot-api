<?php

/**
 * @apiGroup           ActionLog
 * @apiName            UpdateActionLog
 *
 * @api                {PATCH} /v1/action-logs/:id Update Action Log
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

use App\Containers\AppSection\ActionLog\UI\API\Controllers\UpdateActionLogController;
use Illuminate\Support\Facades\Route;

Route::patch('action-logs/{id}', [UpdateActionLogController::class, 'updateActionLog'])
    ->middleware(['auth:api']);

