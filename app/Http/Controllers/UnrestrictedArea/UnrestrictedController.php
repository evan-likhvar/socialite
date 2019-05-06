<?php

namespace App\Http\Controllers\UnrestrictedArea;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class UnrestrictedController extends Controller
{
    protected $template = 'unrestrictedArea.template.template';

    protected $vars;


    protected function renderOutput()
    {
        //dd($this->vars);
        $this->vars = Arr::add($this->vars, 'bottom', view('unrestrictedArea.bottom.bottom')->with('locales', $this->siteLocales())->render());

        return view($this->template)->with($this->vars);
    }

    final protected function siteLocales()
    {
        return view('includes.select-locales')->with('locales',config('settings.SiteLocales'))->render();
    }
}
