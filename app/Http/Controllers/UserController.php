<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enum\PermissionEnum;
use App\Http\Resources\User\UserResource;
use App\Http\Rules\UserRule;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Response;
use Inertia\ResponseFactory;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function index(): Response|ResponseFactory
    {
        $this->authorize(PermissionEnum::USER_VIEW->value);

        return inertia('user/index', [
            'users' => UserResource::collection(app(UserService::class)->getUsers()),
        ]);
    }

    /**
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function create(): Response|ResponseFactory
    {
        $this->authorize(PermissionEnum::USER_CREATE->value);

        //
        return inertia('user/create', [
            'roles' => Role::select('id', 'name')->get(),
        ]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize(PermissionEnum::USER_CREATE->value);
        /**
         * @var array<string[]> $validated
         */
        $validated = $request->validate([
            'name' => UserRule::name(),
            'email' => UserRule::uniqueEmail(),
            'role' => ['required', 'string'],
        ]);

        /**
         * @var User $user
         */
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt(Str::random(50)),
        ]);

        $user->syncRoles($validated['role']);

        return redirect()->route('users.index')->with('success',"User created successfully.");
    }

    /**
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function edit(User $user): Response|ResponseFactory
    {
        $this->authorize(PermissionEnum::USER_UPDATE->value);

        //
        return inertia('user/edit', [
            'user' => new UserResource($user->load('roles')),
            'roles' => Role::select('id', 'name')->get(),
        ]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $this->authorize(PermissionEnum::USER_UPDATE->value);
        /**
         * @var array<string,string[]> $validated
         */
        $validated = $request->validate([
            'name' => UserRule::name(),
            'email' => UserRule::email(),
            'role' => ['required', 'string'],
        ]);
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);
        $user->password = bcrypt(Str::random(50));
        $user->save();

        $user->syncRoles($validated['role']);

        return redirect()->route('users.index')->with('success',"User updated successfully.");
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        $this->authorize(PermissionEnum::USER_DELETE->value);
        $user->delete();

        return redirect()->route('users.index')->with('success',value: "User deleted successfully.");
    }
}
