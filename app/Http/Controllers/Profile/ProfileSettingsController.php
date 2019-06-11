<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProfileSettingsController extends ProfileController
{

    public function index()
    {
        $this->vars = Arr::add($this->vars, 'content', view('profile/contents/index')->with('user',$this->user));

        return $this->renderOutput();
    }

    public function photos()
    {
        $this->vars = Arr::add($this->vars, 'content', view('profile/contents/photos')->with('user',$this->user));

        return $this->renderOutput();
    }

    public function settings()
    {
        $this->vars = Arr::add($this->vars, 'content', view('profile/contents/settings')->with('user',$this->user));

        return $this->renderOutput();
    }


    protected function renderOutput()
    {
        $this->vars = Arr::add($this->vars, 'leftSide',  view('restrictedArea/control-bar/left-side')->with('user',$this->user));
        $this->vars = Arr::add($this->vars, 'bottom', view('unrestrictedArea.bottom.bottom'));

        return view($this->template)->with($this->vars);
    }
}
