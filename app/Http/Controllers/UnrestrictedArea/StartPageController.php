<?php

namespace App\Http\Controllers\UnrestrictedArea;


use Illuminate\Support\Arr;

class StartPageController extends UnrestrictedController
{
    public function startPage()
    {
        $this->vars = Arr::add($this->vars, 'navigation', view('unrestrictedArea.topBlock.top')->with('locales', $this->siteLocales())->render());
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.startPage.startPage')->render());

        return $this->renderOutput();
    }
}
