<?php

namespace App\Http\Controllers\UnrestrictedArea;


use Illuminate\Support\Arr;

class StartPageController extends UnrestrictedController
{
    public function startPage()
    {
        $content = view('unrestrictedArea.startPage.startPage')->render();
        $this->vars = Arr::add($this->vars,'content',$content);
        return $this->renderOutput();
    }
}
