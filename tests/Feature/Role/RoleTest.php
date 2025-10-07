<?php

declare(strict_types=1);

namespace Tests\Feature\User;

use App\Enum\PermissionEnum;
use App\Enum\RoleEnum;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

use function PHPUnit\Framework\assertTrue;

final class RoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_roles(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::ROLE_VIEW->value);

        $response = $this->actingAs($user)->get(route('roles.index'));

        $response->assertStatus(200);
    }

    public function test_can_store_role(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::ROLE_CREATE->value);

        $response = $this->actingAs($user)->post(route('roles.store'), [
            'name' => 'secretary',
        ]);

        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('roles.index'));
        $response->assertStatus(302);

        $this->assertDatabaseHas('roles', [
            'name' => 'secretary',
        ]);
    }

    public function test_can_update_role(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::ROLE_UPDATE->value);

        $role = Role::create(['name' => 'teacher']);

        $response = $this->actingAs($user)->put(route('roles.update', $role), [
            'name' => 'secretary',
        ]);

        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('roles.index'));
        $response->assertStatus(302);

        $this->assertDatabaseHas('roles', [
            'id' => $role->id,
            'name' => 'secretary',
        ]);
    }

    public function test_can_update_role_permissions(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::ROLE_UPDATE->value);

        $role = Role::create(['name' => 'secretary']);

        $permissions = collect(PermissionEnum::cases())->map(fn (PermissionEnum $q) => $q->value)->toArray();

        $response = $this->actingAs($user)->put(route('roles.updatePermission', $role), [
            'permissions' => $permissions,
        ]);

        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('roles.index'));
        $response->assertStatus(302);

        $role->refresh();
        assertTrue($role->hasAllPermissions($permissions));
    }

    public function test_can_destroy_role(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::ROLE_DELETE->value);

        $role = Role::create(['name' => 'secretary']);

        $responseConfirm = $this->actingAs($user)->post(
            route('role.password.confirm'),
            [
                'role' => RoleEnum::SUPER_ADMIN->value,
                'password' => 'password',
            ]
        );
        $responseConfirm->assertSessionHasNoErrors();

        $response = $this->actingAs($user)->delete(route('roles.destroy', $role));

        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);

        $this->assertDatabaseMissing('roles', [
            'id' => $role->id,
        ]);
    }
}
