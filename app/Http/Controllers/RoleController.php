<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\Permission\UpdatePermissionAction;
use App\Enum\PermissionEnum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Response;
use Spatie\Permission\Models\Role;

final class RoleController extends Controller
{
    public function index(): Response
    {
        $this->authorize(PermissionEnum::ROLE_VIEW->value);

        $roles = Role::query()->paginate(10);

        return inertia('role/index', [
            'roles' => $roles,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->authorize(PermissionEnum::ROLE_CREATE->value);

        $request->validate([
            'name' => cr()
                ->required()
                ->string()
                ->sanitizeXss()
                ->merge([Rule::unique(Role::class, 'name')]),
        ]);

        Role::create([
            'name' => mb_strtolower((string) $request->string('name')),
        ]);

        return redirect()->route('roles.index')
            ->with('success', 'Role created successfully');
    }

    public function update(Request $request, Role $role): RedirectResponse
    {
        $this->authorize(PermissionEnum::ROLE_UPDATE->value);

        $request->validate([
            'name' => cr()
                ->required()
                ->string()
                ->sanitizeXss()
                ->merge([Rule::unique(Role::class, 'name')->ignore($role->id)]),
        ]);

        $role->update([
            'name' => mb_strtolower((string) $request->string('name')),
        ]);

        return redirect()->route('roles.index')
            ->with('success', 'Role updated successfully');
    }

    public function updatePermission(Request $request, Role $role): RedirectResponse
    {
        $this->authorize(PermissionEnum::ROLE_UPDATE->value);

        $request->validate([
            'permissions' => cr()->required()->array(),
            'permissions.*' => cr()
                ->required()
                ->string()
                ->merge(['exists:permissions,name']),
        ]);

        UpdatePermissionAction::run($role, $request->array('permissions'));

        return redirect()->route('roles.index')
            ->with('success', 'Role permissions updated successfully');
    }

    public function destroy(Role $role): RedirectResponse
    {
        $this->authorize(PermissionEnum::ROLE_DELETE->value);

        $role->delete();

        return redirect()->route('roles.index')
            ->with('success', 'Role deleted successfully');
    }
}
