<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->route('locale');
        $allowed = ['tc', 'sc', 'en'];

        if (in_array($locale, $allowed)) {
            app()->setLocale($locale);
            return $next($request);
        }

        $header = explode(',', $request->server('HTTP_ACCEPT_LANGUAGE'))[0] ?? 'tc';
        $browserLocale = preg_replace(['/zh-(tw|hk|mo|sg)/i', '/zh-cn/i', '/en-.+/i'], ['tc', 'sc', 'en'], $header);
        $fallbackLocale = in_array($browserLocale, $allowed) ? $browserLocale : 'tc';

        app()->setLocale($fallbackLocale);
        return redirect()->route('page', [
            'locale' => $fallbackLocale,
            'page' => $request->route('page')
        ]);
    }
}
