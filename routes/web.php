<?php

Route::get('/encounters', 'RestrictedArea\EncounterController@start')->middleware('locale')->name('encounters');

Route::get('/mygallery/{image}', 'Service\StorageController@getOwnImages')->name('profile.gallery.image');
Route::get('/storage/main-image', 'Service\StorageController@getMainImage')->name('profile.main.image');

Route::get('/storage/{target}', 'Service\StorageController@getTarget');



Route::get('/profile', 'Profile\ProfileController@index')->name('profile');

Route::get('/profile/photos', 'Profile\ProfileController@photos')->name('profile.photos');
