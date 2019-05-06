<?php

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


Route::middleware(['guest'])->group(function () {

    Route::get('/login','UnrestrictedArea\CommonPagesController@showLoginForm')->middleware(['locale'])->name('login');
    Route::get('/register','UnrestrictedArea\CommonPagesController@showRegisterForm')->middleware(['locale'])->name('register');
    Route::get('/password/reset','UnrestrictedArea\CommonPagesController@showLinkRequestForm')->middleware(['locale'])->name('password.request');


    Route::post('/login','Auth\LoginController@login')->name('login_post');


});