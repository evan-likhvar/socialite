<?php

namespace App\Http\Controllers\Git;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class LoginGitController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();


        dd($user);

        // $user->token;
    }
}
