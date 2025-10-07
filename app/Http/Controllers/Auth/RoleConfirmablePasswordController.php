<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Inertia\Response;
use Spatie\Permission\Models\Role;

final class RoleConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password page.
     */
    public function show(Request $request): Response
    {
        return Inertia::render('auth/role/confirm-password', [
            'role' => $request->string('role'),
        ]);
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => cr()->required()->string(),
            'role' => cr()->required()->string()->merge([Rule::exists(Role::class, 'name')]),
        ]);
        $password = (string) $request->string('password');

        $roleName = (string) $request->string('role');

        // 1️⃣ Get users under that role
        $users = User::whereHas('roles', function ($query) use ($roleName) {
            $query->where('name', $roleName);
        })->get(); // handle null role safely

        if ($users->isEmpty()) {
            return back()->withErrors(['role' => 'Credentials do not match.']);
        }

        // 2️⃣ Check if at least one user matches the password
        $matchFound = false;
        foreach ($users as $user) {
            if (Hash::check($password, $user->password)) {
                $matchFound = true;
                break; // stop once a match is found
            }
        }

        if (! $matchFound) {
            return back()->withErrors(['password' => 'Credentials do not match.']);
        }

        // 3️⃣ Store session marker
        $request->session()->put('auth.'.$roleName.'_password_confirmed_at', time());

        return redirect()->intended(route('dashboard', absolute: false));
    }
}
