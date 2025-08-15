<?php

namespace App\Http\Controllers\Settings;

use App\Actions\User\UpdateUserPasswordAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Inertia\Inertia;
use Inertia\Response;

class PasswordController extends Controller
{
    /**
     * Show the user's password settings page.
     */
    public function edit(): Response
    {
        return Inertia::render('settings/password');
    }

    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        /** @var array{
         *     current_password: string,
         *     password: string,
         *     password_confirmation: string
         * } $validated
         */
        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);
        /** @var \App\Models\User $user */
        $user = $request->user();
        UpdateUserPasswordAction::run($user, $validated['password']);
        return back();
    }
}
