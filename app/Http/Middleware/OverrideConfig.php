<?php

namespace App\Http\Middleware;

use App\Services\GeneralService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OverrideConfig
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isMobile = (new GeneralService)->isMobile();
        config(['app.is_mobile' => $isMobile]);
        // config(['app.debug' => false]);
        // config(['debugbar.enabled' => null]);
        // config(['app.is_demo' => Setting::firstOrCreate(['key' => 'app_is_demo'], ['value' => false])->value === '1']);
        // $debug = Setting::firstOrCreate(['key' => 'debugbar'], ['value' => config('app.debug')])->value === '1';
        // if ($debug && config('app.debug') && !config('app.is_demo')) {
        //     Debugbar::enable();
        // } else {
        //     Debugbar::disable();
        // }
        // config(['captcha.sitekey' => SettingRepository::googleCaptchaSiteKey()]);
        // config(['captcha.secret' => SettingRepository::googleCaptchaSecret()]);

        return $next($request);
    }
}
