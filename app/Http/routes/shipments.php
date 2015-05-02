<?php
Route::resource('users.shipments',                      'UserShipmentController');
Route::resource('shipments',                            'ShipmentController');
Route::resource('shipments.origin',                     'ShipmentOriginController');
Route::post('shipments/{shipment}/origin/select',       ['as' => 'shipments.origin.select', 'uses' => 'ShipmentOriginController@select']);
Route::resource('shipments.destination',                'ShipmentDestinationController');
Route::post('shipments/{shipment}/destination/select',  ['as' => 'shipments.destination.select', 'uses' => 'ShipmentDestinationController@select']);
Route::resource('shipments.type',                       'ShipmentTypeController');
Route::resource('shipments.size',                       'ShipmentSizeController');
Route::post('shipments/{shipment}/size/select',         ['as' => 'shipments.size.select', 'uses' => 'ShipmentSizeController@select']);
Route::resource('shipments.specs',                      'ShipmentSpecController');
Route::post('shipments/{shipment}/specs/select',        ['as' => 'shipments.specs.select', 'uses' => 'ShipmentSpecController@select']);