<?php
Route::get('tour/{tour}/publish',      ['as' => 'tour.updatePublish', 'uses' => 'TourController@updatePublish']);
Route::post('tour/{tour}/publish',      ['as' => 'tour.publish', 'uses' => 'TourController@publish']);
Route::resource('tour',                 'TourController');
Route::resource('tour.booking',         'TourBookingController');
Route::resource('tour.booking.rating',  'TourBookingRatingController');
Route::resource('tour.segment',         'TourSegmentController');