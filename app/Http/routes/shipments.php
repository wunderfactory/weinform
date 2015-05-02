<?php
Route::resource('users.shipments',                      'UserShipmentController');
Route::resource('shipments',                            'ShipmentController');
Route::resource('shipments.origin',                     'ShipmentOriginController');
Route::post('shipments/{shipment}/origin/select',       ['as' => 'shipments.origin.select', 'uses' => 'ShipmentOriginController@select']);
Route::resource('shipments.destination',                'ShipmentDestinationController');
Route::post('shipments/{shipment}/destination/select',  ['as' => 'shipments.destination.select', 'uses' => 'ShipmentDestinationController@select']);
Route::resource('shipments.type',                       'ShipmentTypeController');