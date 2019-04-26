<?php

//Route::get('/', function () {
//    app()->setLocale('ru');
//    return view('auth.app');
//})->middleware('guest');

Route::get('/person-space', function () {
    app()->setLocale('ru');
    return view('person-space.app');
});




Route::get('/', 'UnrestrictedArea\StartPageController@startPage')->middleware('guest');


Route::post('login/github', 'Service\ChangeLocaleController@changeLocale')->name('change-locale');









Route::get('login/github', 'Git\LoginGitController@redirectToProvider')->name('login-git');
Route::get('login/github/callback', 'Git\LoginGitController@handleProviderCallback');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
