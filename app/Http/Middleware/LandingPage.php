<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as AuthFacade;
use Symfony\Component\HttpFoundation\Response;

class LandingPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (app()->environment('production')) {
            $url = $request->getHost();

            if (str_contains($url, 'backoffice.')) {
                if (AuthFacade::guard('web')->check() && AuthFacade::user()->isAdmin()) {
                    return redirect(route('admin.dashboard.index'));
                }else{
                    AuthFacade::logout();
                    return redirect(route('login_backoffice'));
                }
            } elseif (str_contains($url, 'merchant.')) {
                if (AuthFacade::guard('web')->check() && !AuthFacade::user()->isAdmin()) {
                    return redirect(route('dashboard'));
                }else{
                    AuthFacade::logout();
                    return redirect(route('login'));
                }
            }
        }


        return $next($request);
    }
}
