<?php

namespace App\Http\Controllers\UnrestrictedArea;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class UnrestrictedController extends Controller
{
    protected $template = 'unrestrictedArea.template.template';

    protected $vars;


    protected function renderOutput() {


        //$this->siteLocales();

        $navigation = view('unrestrictedArea.topBlock.top')->with('locales',$this->siteLocales())->render();
        $this->vars = Arr::add($this->vars,'navigation',$navigation);


        //dd($this->vars);

        return view($this->template)->with($this->vars);
    }

    final private function siteLocales()
    {
        return view('includes.select-locales')->with('locales',config('settings.SiteLocales'))->render();
    }
}
