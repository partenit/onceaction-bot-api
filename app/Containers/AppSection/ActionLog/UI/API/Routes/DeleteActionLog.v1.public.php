<?php

/**
 * @apiGroup           ActionLog
 * @apiName            DeleteActionLog
 *
 * @api                {DELETE} /v1/action-logs/:id Delete Action Log
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

use App\Containers\AppSection\ActionLog\UI\API\Controllers\DeleteActionLogController;
use Illuminate\Support\Facades\Route;

Route::delete('action-logs/{id}', [DeleteActionLogController::class, 'deleteActionLog'])
    ->middleware(['auth:api']);

