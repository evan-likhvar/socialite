<?php

namespace App\Http\Controllers\RestrictedArea;

use App\Repositories\UserImages\ImageRepository;
use Illuminate\Http\Request;


class ImageController extends RestrictedController
{

    private $image;

    public function __construct()
    {
        parent::__construct();
        $this->image = new ImageRepository();
    }

    public function imageUpload(Request $request)
    {
        //todo create validation rule

        $this->image->createImageForUser($request->file('image'),$this->user);

        dd('dcdcwdcd');
    }


}
