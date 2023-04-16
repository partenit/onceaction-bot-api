<?php

/**
 * @apiGroup           Action
 * @apiName            DeleteAction
 *
 * @api                {DELETE} /v1/actions/:id Delete Action
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

use App\Containers\AppSection\Action\UI\API\Controllers\DeleteActionController;
use Illuminate\Support\Facades\Route;

Route::delete('actions/{id}', [DeleteActionController::class, 'deleteAction'])
    ->middleware(['auth:api']);

