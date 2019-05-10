<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;

class StorageController extends Controller
{
    public function getTarget($target)
    {
        return response()->file(storage_path('cache/' . $target));
    }
}
