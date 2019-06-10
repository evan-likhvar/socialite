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

    /**
     * @param UploadedFile $image
     * @param User $user
     */
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
            'confirmed' => 0,
            'public' => 0,
            'main' => 0,
        ]);

        Storage::makeDirectory("{$this->param->imagesPath}/{$this->user->id}/{$this->param->imageCacheSuffix}");
        ImageResize::imageMakeResize(
            config('filesystems.disks.local.root') . '/' . $path,
            $this->param->resize,
            pathinfo(config('filesystems.disks.local.root') . '/' . $path, PATHINFO_DIRNAME) . "/" . $this->param->imageCacheSuffix);


        //dd($image, storage_path(), config('filesystems.disks.local.root'), $path, $hashName, $image->getMimeType(), explode('/', $image->getMimeType())[1], $image->getClientOriginalName());
    }

    /**
     * @param string $hashName
     * @param string $userId
     * @throws \Exception
     */
    public function deleteImage(string $hashName, string $userId): void
    {
        $model = UserImage::where('user_id', $userId)->where('image_hash_name', $hashName)->first();
        if (!$model) throw new \Exception('Image model not found');
        if ($model->main == 1) throw new \Exception('Can\'t delete the main image');

        DB::transaction(function () use ($model, $userId, $hashName) {
            $model->delete();
            Storage::delete("{$this->param->imagesPath}/$userId/$hashName");

            $sizes = array_keys($this->param->resize);
            array_walk($sizes, function (&$value) use ($userId, $hashName) {
                $name = explode('.', $hashName)[0] . "_$value" . '.' . explode('.', $hashName)[1];
                $value = "{$this->param->imagesPath}/{$userId}/{$this->param->imageCacheSuffix}/$name";
            });
            Storage::delete($sizes);
        }, 2);
    }

    /**
     * @param string $hashName
     * @param string $userId
     * @throws \Exception
     */
    public function setMainImage(string $hashName, string $userId): void
    {
        $model = UserImage::where('user_id', $userId)->where('image_hash_name', $hashName)->first();
        if (!$model) throw new \Exception('Image model not found');
        if ($model->main == 1) throw new \Exception('Image already set as a main image');
        if ($model->public != 1) throw new \Exception('The main image must have public access!');

        DB::transaction(function () use ($model, $userId) {
            DB::update("update user_images set main = 0 where user_id = '$userId'");
            $model->main = 1;
            $model->save();
        }, 2);
    }

    public function toggleImageAccess(string $hashName, string $userId): void
    {
        $model = UserImage::where('user_id', $userId)->where('image_hash_name', $hashName)->first();
        if (!$model) throw new \Exception('Image model not found');

        $model->public = !$model->public;
        $model->save();
    }

    public function getPathToStoredImage(string $userPath, string $fileName, string $size)
    {
        $name = explode('.', $fileName)[0] . "_$size" . '.' . explode('.', $fileName)[1];

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