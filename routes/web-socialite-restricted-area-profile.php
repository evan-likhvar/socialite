<?php


/*Route::middleware(['web','locale','auth'])
    ->prefix('profile')
    ->namespace($this->namespace.'\Profile')*/


Route::post('image-main-set',       'ProfileUserImageController@setMainImage')                  ->name('image.set.main');
Route::post('image-toggle-access',  'ProfileUserImageController@setTogglePublicPrivateImage')   ->name('image.toggle.access');
Route::post('image-delete',         'ProfileUserImageController@deleteImage')                   ->name('image.delete');
