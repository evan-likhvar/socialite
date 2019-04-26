<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = User::find(Auth::id());
            return $next($request);
        });
    }
}
