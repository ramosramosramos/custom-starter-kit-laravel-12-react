<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Traits\AuthUserTrait;
use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tighten\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    use AuthUserTrait;

    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        /** @var string|null $quoteString */
        $quoteString = Inspiring::quotes()->random();

        $quoteParts = str($quoteString ?? '')->explode('-');

        /** @var \App\Models\User|null $user */
        $user = $request->user();

        return [
            ...parent::share($request),
            'name' => config('app.name'),

            'quote' => ['message' => trim($quoteParts[0] ?? ''), 'author' => trim($quoteParts[1] ?? '')],
            'auth' => [
                'user' => $user
                    ? [
                        ...$user->only('id', 'name', 'email', 'email_verified_at'),
                        'can' => $this->getCan($user),
                    ]
                    : null,
            ],
            'flash' => [
                'success' => session('success'),
                'error' => session('error'),
            ],
            'ziggy' => fn(): array => [
                ...(new Ziggy())->toArray(),
                'location' => $request->url(),
            ],
            'sidebarOpen' => !$request->hasCookie('sidebar_state') || $request->cookie('sidebar_state') === 'true',
        ];
    }
}
