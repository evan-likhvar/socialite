<?php

namespace App\Http\Controllers\RestrictedArea;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class RestrictedController extends Controller
{
    protected $template = 'restrictedArea.template.template';

    protected $vars;


    protected function renderOutput()
    {
        $this->vars = Arr::add($this->vars, 'bottom', view('unrestrictedArea.bottom.bottom'));

        return view($this->template)->with($this->vars);
    }
}
