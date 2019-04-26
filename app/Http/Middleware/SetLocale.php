<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;

class SetLocale
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /** @var Session $session */
        $session = $request->getSession();

        if (!$session->has(config('settings.LocaleSessionKey'))) {
            $session->put(config('settings.LocaleSessionKey'), $request->getPreferredLanguage(config('settings.SiteLocales')));
        }

        app()->setLocale($session->get(config('settings.LocaleSessionKey')));

        return $next($request);
    }
}
