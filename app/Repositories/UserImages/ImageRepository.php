<?php


namespace App\Repositories\UserImages;

use App\Models\UserImage;
use App\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageRepository
{
    /**
     * @var ImageParam
     */
    private $param;
    /**
     * @var User
     */
    private $user;
    /**
     * @var UploadedFile
     */
    private $image;

    public function __construct()
    {
        $this->param = new ImageParam();
    }

    public function createImageForUser(UploadedFile $image, User $user)
    {
        $this->image = $image;
        $this->user = $user;
        $hashName = $this->getRandomStr();
        $path = $this->store($hashName);

        UserImage::create([
            'user_id' => $this->user->id,
            'image_user_name' => pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.' . explode('/', $image->getMimeType())[1],
            'image_hash_name' => $hashName,
            'unproved' => 0,
            'public' => 0,
            'main' => 0,
        ]);

        //todo create gallery for image

        Storage::makeDirectory("{$this->param->imagesPath}/{$this->user->id}/{$this->param->imageCacheSuffix}");
        ImageResize::imageMakeResize(
            config('filesystems.disks.local.root') . '/' . $path,
            $this->param->resize,
            pathinfo(config('filesystems.disks.local.root') . '/' . $path, PATHINFO_DIRNAME) . "/" . $this->param->imageCacheSuffix);


        dd($image, storage_path(), config('filesystems.disks.local.root'), $path, $hashName, $image->getMimeType(), explode('/', $image->getMimeType())[1], $image->getClientOriginalName());
    }

    public function getPathToStoredImage(string $userPath, string $fileName, string $size)
    {
        $name = explode('.',$fileName)[0]."_$size".'.'.explode('.',$fileName)[1];

        return "app/{$this->param->imagesPath}/{$userPath}/{$this->param->imageCacheSuffix}/$name";
    }

    private function store(string $fileName): string
    {
        return $this->image->storeAs("{$this->param->imagesPath}/{$this->user->id}", $fileName);
    }

    private function getRandomStr(): string
    {
        $random = Str::random(20) . '.' . explode('/', $this->image->getMimeType())[1];

        if (!empty(DB::select(
            "select user_id from user_images where user_id='{$this->user->user_id}' and image_hash_name='$random'"
        ))) {
            $this->getRandomStr();
        }
        return $random;
    }
}