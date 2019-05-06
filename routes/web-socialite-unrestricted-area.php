<?php

Route::get('/', 'StartPageController@startPage')->middleware('guest')->name('start');
Route::get('/about', 'CommonPagesController@aboutPage')->name('about');
Route::get('/terms', 'CommonPagesController@termsPage')->name('terms');
Route::get('/privacy', 'CommonPagesController@privacyPage')->name('privacy');
Route::get('/help', 'CommonPagesController@helpPage')->name('help');
