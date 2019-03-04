<?php

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('countries', 'CountriesController');

    Route::apiResource('hotels', 'HotelsController');

    Route::apiResource('bookings', 'BookingsController');
});
