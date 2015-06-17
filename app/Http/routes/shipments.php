<?php
Route::resource('users.shipments',                      'UserShipmentController');
Route::resource('shipments',                            'ShipmentController');
Route::get('shipments/{shipment}/publish',              ['as' => 'shipments.publish', 'uses' => 'ShipmentController@publish']);
Route::post('shipments/{shipment}/publish',             ['as' => 'shipments.dopublish', 'uses' => 'ShipmentController@doPublish']);
Route::resource('shipments.origin',                     'ShipmentOriginController');
Route::post('shipments/{shipment}/origin/select',       ['as' => 'shipments.origin.select', 'uses' => 'ShipmentOriginController@select']);
Route::resource('shipments.destination',                'ShipmentDestinationController');
Route::post('shipments/{shipment}/destination/select',  ['as' => 'shipments.destination.select', 'uses' => 'ShipmentDestinationController@select']);
Route::resource('shipments.size',                       'ShipmentSizeController');
Route::post('shipments/{shipment}/size/select',         ['as' => 'shipments.size.select', 'uses' => 'ShipmentSizeController@select']);
Route::resource('shipments.specs',                      'ShipmentSpecController');
Route::post('shipments/{shipment}/specs/select',        ['as' => 'shipments.specs.select', 'uses' => 'ShipmentSpecController@select']);
Route::get('shipments/{shipment}/immediate/book',         ['midleware' => ['auth', 'driver', 'driver.unverified', 'driver.goodRating'],'as' => 'shipments.immediate.book', 'uses' => 'ShipmentImmediateController@book']);
Route::post('shipments/{shipment}/immediate/book',         ['as' => 'shipments.immediate.dobook', 'uses' => 'ShipmentImmediateController@doBook']);
Route::resource('shipments.auction',                    'ShipmentAuctionController');
Route::resource('shipments.immediate',                  'ShipmentImmediateController');