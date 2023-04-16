<?php

/**
 * @apiGroup           Action
 * @apiName            CreateAction
 *
 * @api                {POST} /v1/actions Create Action
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

use App\Containers\AppSection\Action\UI\API\Controllers\CreateActionController;
use Illuminate\Support\Facades\Route;

Route::post('actions', [CreateActionController::class, 'createAction'])
    ->middleware(['auth:api']);

