<?php


namespace App\Repositories\UserImages;


use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class ImageResize
{

    public static function imageMakeResize(
        string $pathToOriginalImage,
        array $resizeParam,
        string $pathToCacheDirectory,
        Model $model = null)
    {
        $img = Image::make($pathToOriginalImage);
        $fileInfo = pathinfo($pathToOriginalImage);
        $tmp = Image::make($img->getCore());

        foreach ($resizeParam as $nameSuffix=>$size){
            $tmp->fit($size[0], $size[1]);
            $tmp->save($pathToCacheDirectory."/{$fileInfo['filename']}_{$nameSuffix}.{$fileInfo['extension']}");
        }
    }
}