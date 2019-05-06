<?php

//Auth::routes();


Route::get('/person-space', function () {
    app()->setLocale('ru');
    return view('person-space.app');
});

