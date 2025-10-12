<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\Permission\UpdatePermissionAction;
use App\Enum\PermissionEnum;
use App\Http\Resources\RoleResource;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Response;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

final class RoleController extends Controller
{
    public function index(Request $request): Response
    {
        $this->authorize(PermissionEnum::ROLE_VIEW->value);
        $request->validate(['search' => cr()->nullable()->string()->sanitizeXss()]);
        $search = (string) $request->string('search', null);
        $roles = Role::query()->with('permissions')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })
            ->select(['id', 'name', 'created_at'])
            ->paginate(10);

        return inertia('role/index', [
            'roles' => RoleResource::collection($roles),
            'filter' => [
                'search' => $search,
            ],
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->authorize(PermissionEnum::ROLE_CREATE->value);

        $request->validate([
            'name' => cr()
                ->required()
                ->string()
                ->lowercase()
                ->sanitizeXss()
                ->merge([Rule::unique(Role::class, 'name')]),
        ]);

        Role::create([
            'name' => (string) $request->string('name'),
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
                ->lowercase()
                ->sanitizeXss()
                ->merge([Rule::unique(Role::class, 'name')->ignore($role->id)]),
        ]);

        $role->update([
            'name' => (string) $request->string('name'),
        ]);

        return redirect()->route('roles.index')
            ->with('success', 'Role updated successfully');
    }

    public function editPermission(Role $role): Response
    {
        $this->authorize(PermissionEnum::USER_UPDATE->value);

        return inertia('role/edit-permission', [
            'role' => new RoleResource($role->load('permissions')),
            'permissions' => Permission::select('id', 'name')->get(),
        ]);
    }

    public function updatePermission(Request $request, Role $role): RedirectResponse
    {
        $this->authorize(PermissionEnum::ROLE_UPDATE->value);

        $request->validate([
            'permissions' => cr()->nullable()->array(),
            'permissions.*' => cr()
                ->nullable()
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
