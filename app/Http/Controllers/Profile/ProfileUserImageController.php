<?php

namespace App\Http\Controllers\Profile;

use App\Repositories\UserImages\ImageRepository;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileUserImageController extends Controller
{
    private $imageRepository;

    public function __construct()
    {
        parent::__construct();
        $this->imageRepository = new ImageRepository();
    }

    public function deleteImage(Request $request)
    {
        try {
            $this->imageRepository->deleteImage($request->input('name'), $this->user->id);
        } catch (Exception $exception) {
            return $this->errorResponse($exception->getMessage());
        }

        return redirect()->back();
    }

    public function setMainImage(Request $request)
    {
        try {
            $this->imageRepository->setMainImage($request->input('name'), $this->user->id);
        } catch (Exception $exception) {
            return $this->errorResponse($exception->getMessage());
        }

        return redirect()->back();
    }

    public function setTogglePublicPrivateImage(Request $request)
    {
        try {
            $this->imageRepository->toggleImageAccess($request->input('name'), $this->user->id);
        } catch (Exception $exception) {
            return $this->errorResponse($exception->getMessage());
        }

        return redirect()->back();
    }

    private function errorResponse(string $exceptionMessage):string
    {
        return '<pre>Error was raised: <strong>' . $exceptionMessage . '</strong></pre>';
    }
}
