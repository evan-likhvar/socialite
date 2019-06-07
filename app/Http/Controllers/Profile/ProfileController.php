<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class ProfileController extends Controller
{
    protected $template = 'profile.template.template';

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
    }
}
