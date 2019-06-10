<?php

Route::get('/encounters', 'RestrictedArea\EncounterController@start')->middleware('locale')->name('encounters');

Route::get('/mygallery/{image}/{size?}', 'Service\StorageController@getOwnImages')->name('profile.gallery.image');
Route::get('/storage/main-image', 'Service\StorageController@getMainImage')->name('profile.main.image');

Route::get('/storage/{target}', 'Service\StorageController@getTarget');




