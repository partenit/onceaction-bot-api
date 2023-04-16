<?php

/**
 * @apiGroup           Action
 * @apiName            GetAllActions
 *
 * @api                {GET} /v1/actions Get All Actions
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

use App\Containers\AppSection\Action\UI\API\Controllers\GetAllActionsController;
use Illuminate\Support\Facades\Route;

Route::get('actions', [GetAllActionsController::class, 'getAllActions']);


