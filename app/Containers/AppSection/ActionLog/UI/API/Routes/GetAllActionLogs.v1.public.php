<?php

/**
 * @apiGroup           ActionLog
 * @apiName            GetAllActionLogs
 *
 * @api                {GET} /v1/action-logs Get All Action Logs
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

use App\Containers\AppSection\ActionLog\UI\API\Controllers\GetAllActionLogsController;
use Illuminate\Support\Facades\Route;

Route::get('action-logs', [GetAllActionLogsController::class, 'getAllActionLogs'])
    ->middleware(['auth:api']);

