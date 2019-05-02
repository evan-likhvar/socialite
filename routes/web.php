<?php

Auth::routes();


//Route::get('/', function () {
//    app()->setLocale('ru');
//    return view('auth.app');
//})->middleware('guest');

Route::get('/person-space', function () {
    app()->setLocale('ru');
    return view('person-space.app');
});








Route::get('login/github', 'Git\LoginGitController@redirectToProvider')->name('login-git');
Route::get('login/github/callback', 'Git\LoginGitController@handleProviderCallback');




Route::get('/home', 'HomeController@index')->name('home');
