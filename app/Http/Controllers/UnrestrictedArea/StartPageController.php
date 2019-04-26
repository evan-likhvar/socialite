<?php

namespace App\Http\Controllers\UnrestrictedArea;


class StartPageController extends UnrestrictedController
{
    public function startPage()
    {
        //app()->setLocale(session('locale'));
        return $this->renderOutput();
    }
}
