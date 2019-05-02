<?php

Route::get('/', 'StartPageController@startPage')->middleware('guest');
