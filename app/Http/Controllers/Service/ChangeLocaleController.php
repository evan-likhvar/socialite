<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangeLocaleController extends Controller
{
    public function changeLocale(Request $request)
    {
        $request->validate([
            'locale'  => 'required|alpha|max:2',
        ]);


        if (in_array($request->input('locale'),config('settings.SiteLocales'))) {
            app()->setLocale($request->input('locale'));
            session([config('settings.LocaleSessionKey')=>$request->input('locale')]);
        }

        return redirect()->back();
    }
}
