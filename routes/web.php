<?php

//Auth::routes(['verify' => true]);


Route::get('/encounters', 'RestrictedArea\EncounterController@start');
