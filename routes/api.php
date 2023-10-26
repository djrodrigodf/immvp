<?php

use App\Http\Controllers\Api\V1\Admin\PropertyApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Property
    Route::apiResource('properties', PropertyApiController::class);
});
