<?php

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


Route::middleware(['guest'])->group(function () {

    Route::get('/login','UnrestrictedArea\CommonPagesController@showLoginForm')->middleware(['locale'])->name('login');
    Route::get('/register','UnrestrictedArea\CommonPagesController@showRegisterForm')->middleware(['locale'])->name('register');
    Route::get('/password/reset/{token}','UnrestrictedArea\CommonPagesController@showResetForm')->middleware(['locale'])->name('password.reset');
    Route::get('/password/reset','UnrestrictedArea\CommonPagesController@showLinkRequestForm')->middleware(['locale'])->name('password.request');


    Route::post('/login','Auth\LoginController@login')->name('login.post');
    Route::post('/register','Auth\RegisterController@register')->name('register.post');
    Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('/password/reset','Auth\ResetPasswordController@reset')->name('password.update');


});