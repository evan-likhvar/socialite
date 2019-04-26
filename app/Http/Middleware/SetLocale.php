<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;

class SetLocale
{

    const SESSION_KEY = 'locale';
    const AVAILABLE_LOCALES = ['en', 'ru'];
    const DEFAULT_LOCALE =  'ru';

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

        if (!$session->has(self::SESSION_KEY)) {
            $session->put(self::SESSION_KEY, $request->getPreferredLanguage(self::AVAILABLE_LOCALES));
        }

        if ($request->has('lang')) {
            $lang = $request->get('lang');
            if (in_array($lang, self::AVAILABLE_LOCALES)) {
                $session->put(self::SESSION_KEY, $lang);
            }
        }

        app()->setLocale($session->get(self::SESSION_KEY));

        return $next($request);
    }
}
