<?php


/*Route::middleware(['web','locale','auth'])
    ->prefix('protected')
    ->namespace($this->namespace.'\RestrictedArea')*/

Route::post('image-upload', 'ImageController@imageUpload')->name('image.upload');
