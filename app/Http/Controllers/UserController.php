<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enum\PermissionEnum;
use App\Enum\RoleEnum;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Inertia\Response;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

final class UserController extends Controller
{
    public function index(): Response
    {
        $this->authorize(PermissionEnum::USER_VIEW->value);

        return inertia('user/index', [
            'users' => UserResource::collection(app(UserService::class)->getUsers()),
        ]);
    }

    public function create(): Response
    {
        $this->authorize(PermissionEnum::USER_CREATE->value);

        //
        return inertia('user/create', [
            'roles' => Role::select('id', 'name')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->authorize(PermissionEnum::USER_CREATE->value);
        $request->validate([
            'name' => cr()->required()->string()->max(255),
            'email' => cr()->required()->email()->merge([Rule::unique(User::class, 'email')]),
            'role' => cr()->required()->string(),
        ]);

        $user = User::create([
            'name' => $request->string('name'),
            'email' => $request->string('email'),
            'password' => bcrypt(Str::random(50)),
        ]);

        $user->syncRoles((string) $request->string('role'));

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user): Response
    {
        $this->authorize(PermissionEnum::USER_UPDATE->value);

        //
        return inertia('user/edit', [
            'user' => new UserResource($user->load('roles')),
            'roles' => Role::select('id', 'name')->get(),
        ]);
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $this->authorize(PermissionEnum::USER_UPDATE->value);

        $request->validate([
            'name' => cr()->required()->string()->max(255),
            'email' => cr()->required()->email()->merge([Rule::unique(User::class, 'email')->ignore($user->id)]),
            'role' => cr()->required()->string(),
        ]);
        $user->update([
            'name' => $request->string('name'),
            'email' => $request->string('email'),
        ]);
        $user->password = bcrypt(Str::random(50));
        $user->save();

        $user->syncRoles((string) $request->string('role'));

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function editPermission(User $user): Response
    {
        $this->authorize(PermissionEnum::USER_UPDATE->value);

        return inertia('user/edit-permission', [
            'user' => new UserResource($user->load('permissions')),
            'permissions' => Permission::select('id', 'name')->get(),
        ]);
    }

    public function updatePermission(Request $request, User $user): RedirectResponse
    {
        $this->authorize(PermissionEnum::USER_UPDATE->value);

        $request->validate([
            'permissions' => cr()->required()->array(),
            'permissions.*' => cr()->required()->string()->merge(['exists:permissions,name']),
        ]);
        $user->syncPermissions($request->array('permissions'));

        return redirect()->route('users.index')->with('success', 'User permissions updated successfully.');
    }

    public function destroy(User $user): RedirectResponse
    {
        abort_if($user->hasRole(RoleEnum::SUPER_ADMIN->value), 404);
        $this->authorize(PermissionEnum::USER_DELETE->value);
        $user->delete();
        $this->resetPasswordConfirm();

        return redirect()->route('users.index')->with('success', value: 'User deleted successfully.');
    }
}
