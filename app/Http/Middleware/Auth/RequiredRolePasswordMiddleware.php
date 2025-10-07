<?php

declare(strict_types=1);

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Symfony\Component\HttpFoundation\Response;

final class RequiredRolePasswordMiddleware
{
    /**
     * The response factory instance.
     *
     * @var ResponseFactory
     */
    private $responseFactory;

    /**
     * The URL generator instance.
     *
     * @var UrlGenerator
     */
    private $urlGenerator;

    /**
     * The password timeout.
     *
     * @var int
     */
    private $passwordTimeout;

    /**
     * Create a new middleware instance.
     *
     * @param  ResponseFactory  $responseFactory
     * @param  UrlGenerator  $urlGenerator
     * @param  int|null  $passwordTimeout
     */
    public function __construct(ResponseFactory $responseFactory, UrlGenerator $urlGenerator, $passwordTimeout = null)
    {
        $this->responseFactory = $responseFactory;
        $this->urlGenerator = $urlGenerator;
        $this->passwordTimeout = $passwordTimeout ?: 10800;
    }

    /**
     * Specify the redirect route and timeout for the middleware.
     *
     * @param  string|null  $redirectToRoute
     * @param  string|int|null  $passwordTimeoutSeconds
     * @return string
     *
     * @named-arguments-supported
     */
    public static function using($redirectToRoute = null, $passwordTimeoutSeconds = null)
    {
        return self::class.':'.implode(',', func_get_args());
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @param  string|null  $redirectToRoute
     * @param  string|int|null  $passwordTimeoutSeconds
     * @return mixed
     */
    public function handle($request, Closure $next, string $role, $redirectToRoute = null, $passwordTimeoutSeconds = 30)
    {
        if ($this->shouldConfirmPassword($request, $passwordTimeoutSeconds, $role)) {
            if ($request->expectsJson()) {
                return $this->responseFactory->json([
                    'message' => ucfirst($role).' password confirmation required.',
                ], 423);
            }

            return $this->responseFactory->redirectGuest(
                $this->urlGenerator->route($redirectToRoute ?: 'role.password.confirm', [
                    'role' => $role,
                ]),

            );
        }

        return $next($request);
    }

    /**
     * Determine if the confirmation timeout has expired.
     *
     * @param  Request  $request
     * @param  string|int|null  $passwordTimeoutSeconds
     * @return bool
     */
    private function shouldConfirmPassword($request, $passwordTimeoutSeconds = null, string $role = 'admin'): bool
    {
        // @phpstan-ignore-next-line
        $confirmedAt = Date::now()->unix() - $request->session()->get('auth.'.$role.'_password_confirmed_at', 0);

        return $confirmedAt > ($passwordTimeoutSeconds ?? $this->passwordTimeout);
    }
}
