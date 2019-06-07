<?php

namespace App\Http\Controllers\Profile;

use App\Repositories\UserImages\ImageRepository;
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
        try{
            $this->imageRepository->deleteImage($request->input('name'),$this->user->id);
        } catch (\Exception $exception) {
            return 'Error was raised '.$exception->getMessage();
        }

        return redirect()->back();
    }

    public function setMainImage(Request $request)
    {
        return 'image set as the main image';
    }
    public function setTogglePublicPrivateImage(Request $request)
    {
        return 'image access changed';
    }
/*    protected $template = 'profile.template.template';

    protected $vars;


    public function index()
    {
        $this->vars = Arr::add($this->vars, 'leftSide',  view('restrictedArea/control-bar/left-side')->with('user',$this->user));
        $this->vars = Arr::add($this->vars, 'content', 'some dashboard');

        return $this->renderOutput();
    }

    public function photos()
    {

        $this->vars = Arr::add($this->vars, 'leftSide',  view('restrictedArea/control-bar/left-side')->with('user',$this->user));
        $this->vars = Arr::add($this->vars, 'content', view('profile/contents/photos')->with('user',$this->user));

        return $this->renderOutput();
    }



    protected function renderOutput()
    {
        $this->vars = Arr::add($this->vars, 'bottom', view('unrestrictedArea.bottom.bottom'));

        return view($this->template)->with($this->vars);
    }*/
}
