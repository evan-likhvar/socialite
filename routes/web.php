<?php

//Auth::routes(['verify' => true]);


Route::get('/encounters', 'RestrictedArea\EncounterController@start')->middleware('locale')->name('encounters');


Route::get('/storage/{target}', 'Service\StorageController@getTarget');
