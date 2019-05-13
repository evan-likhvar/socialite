<?php

namespace App\Http\Controllers\RestrictedArea;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class EncounterController extends RestrictedController
{
    public function start()
    {

        $this->vars = Arr::add($this->vars, 'leftSide', $this->user
            ? view('restrictedArea/control-bar/left-side')->with('user',$this->user)
            : view('auth.register-login-form'));

        //$this->vars = Arr::add($this->vars, 'navigation', view('unrestrictedArea.topBlock.top')->with('locales', $this->siteLocales())->render());
        //$this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.startPage.startPage')->render());

        return $this->renderOutput();


        //return view('restrictedArea.layout.layout');
    }
}
