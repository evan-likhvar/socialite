<?php

namespace App\Http\Controllers\RestrictedArea;

use Illuminate\Http\Request;

class EncounterController extends RestrictedController
{
    public function start()
    {
        return view('restrictedArea.layout.layout');
    }
}
