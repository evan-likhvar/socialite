<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangeLocaleController extends Controller
{
    public function changeLocale(Request $request)
    {

        dd($request->all());
    }
}
