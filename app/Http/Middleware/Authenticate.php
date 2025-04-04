<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as BaseAuthenticate;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Support\Facades\Auth as AuthFacade;
use Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests;
use Illuminate\Http\Request;

class Authenticate extends BaseAuthenticate implements AuthenticatesRequests
{
    /**
     * The authentication factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * The callback that should be used to generate the authentication redirect path.
     *
     * @var callable
     */
    protected static $redirectToCallback;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Specify the guards for the middleware.
     *
     * @param  string  $guard
     * @param  string  $others
     * @return string
     */
    public static function using($guard, ...$others)
    {
        return static::class.':'.implode(',', [$guard, ...$others]);
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (app()->environment('production')) {
            $url = $request->getHost();
            $path = $request->path();

            $isBackoffice = str_contains($url, 'backoffice.');
            $isMerchant   = str_contains($url, 'merchant.');

            // Force redirect to index if regular domain
            if (!$isBackoffice && !$isMerchant) {
                return redirect(route('index'));
            }

            // Backoffice rules: unknown path or '/' then redirect to login but if already login then redirect to dashboard
            if ($isBackoffice && !str_contains($path, 'login_backoffice') && !str_contains($path, 'app')) {
                if (AuthFacade::guard('web')->check() && AuthFacade::user()->isAdmin()) {
                    return redirect(route('admin.dashboard.index'));
                }else{
                    AuthFacade::logout();
                    return redirect(route('login_backoffice'));
                }
            }

            // Merchant rules: same as backoffice (with merchant routes)
            if ($isMerchant && !str_contains($path, 'login') && !str_contains($path, 'app')) {
                if (AuthFacade::guard('web')->check() && !AuthFacade::user()->isAdmin()) {
                    return redirect(route('dahboard'));
                }else{
                    AuthFacade::logout();
                    return redirect(route('login'));
                }
            }
        }

        $this->authenticate($request, $guards);

        return $next($request);
    }

    /**
     * Determine if the user is logged in to any of the given guards.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $guards
     * @return void
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function authenticate($request, array $guards)
    {
        if (empty($guards)) {
            $guards = [null];
        }

        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                return $this->auth->shouldUse($guard);
            }
        }

        $this->unauthenticated($request, $guards);
    }

    /**
     * Handle an unauthenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $guards
     * @return never
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function unauthenticated($request, array $guards)
    {
        throw new AuthenticationException(
            'Unauthenticated.',
            $guards,
            $request->expectsJson() ? null : $this->redirectTo($request),
        );
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo(Request $request)
    {
        if (static::$redirectToCallback) {
            return call_user_func(static::$redirectToCallback, $request);
        }
    }

    /**
     * Specify the callback that should be used to generate the redirect path.
     *
     * @param  callable  $redirectToCallback
     * @return void
     */
    public static function redirectUsing(callable $redirectToCallback)
    {
        static::$redirectToCallback = $redirectToCallback;
    }
}
