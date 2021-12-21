<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // School
    Route::post('schools/media', 'SchoolApiController@storeMedia')->name('schools.storeMedia');
    Route::apiResource('schools', 'SchoolApiController');
});
