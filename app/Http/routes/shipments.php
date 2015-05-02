<?php
Route::resource('users.shipments',          'UserShipmentController');
Route::resource('shipments',                'ShipmentController');
Route::resource('shipments.origin',         'ShipmentOriginController');
Route::resource('shipments.destination',    'ShipmentDestinationController');
Route::resource('shipments.type',           'ShipmentTypeController');