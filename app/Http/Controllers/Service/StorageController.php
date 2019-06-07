<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Repositories\UserImages\ImageRepository;

class StorageController extends Controller
{
    private $imageRepository;

    public function __construct()
    {
        parent::__construct();

        $this->imageRepository = new ImageRepository();
    }

    public function getTarget($target)
    {

        return response()->file(storage_path('cache/' . $target));
    }

    public function getMainImage()
    {

        $image = $this->user->images->where('main', 1)->first();
        return response()
            //->header("Cache-Control", "public;max_age=10")
            ->file(storage_path($this->imageRepository->getPathToStoredImage($this->user->id, $image->image_hash_name, 'X')))//->headers->set("Cache-Control", "no-store,no-cache");
            ;
    }

    public function getOwnImages($name)
    {
        //dd($name);

        $image = $this->user->images->where('main', 1)->first();
        return response()
            //->header("Cache-Control", "public;max_age=10")
            ->file(storage_path($this->imageRepository->getPathToStoredImage($this->user->id, $image->image_hash_name, 'X')))//->headers->set("Cache-Control", "no-store,no-cache");
            ;
    }
}
