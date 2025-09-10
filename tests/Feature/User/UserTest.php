<?php

namespace Tests\Feature\User;

use App\Enum\PermissionEnum;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use function PHPUnit\Framework\assertContainsEquals;
use function PHPUnit\Framework\assertTrue;

class UserTest extends TestCase
{
    use RefreshDatabase;


    /**
     * A basic feature test example.
     */
    public function test_can_view_users(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::USER_VIEW->value);

        $response = $this->actingAs($user)->get(route('users.index'));

        $response->assertStatus(200);
    }

    public function test_can_create_user(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::USER_CREATE->value);

        $response = $this->actingAs($user)->get(route('users.create'));

        $response->assertStatus(200);
    }

    public function test_can_store_user(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::USER_CREATE->value);

        $response = $this->actingAs($user)->post(route('users.store'), [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'admin',
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('users.index'));

        $response->assertStatus(302);
        $this->assertDatabaseHas('users', [
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }

    public function test_can_edit_user(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::USER_UPDATE->value);

        $response = $this->actingAs($user)->get(route('users.edit', $user));

        $response->assertStatus(200);
    }

    public function test_can_update_user(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::USER_UPDATE->value);

        $response = $this->actingAs($user)->put(route('users.update', $user), [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'admin',
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('users.index'));
        $response->assertStatus(302);
        $this->assertDatabaseHas('users', [
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
    public function test_can_update_user_permissions(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::USER_UPDATE->value);


        $response = $this->actingAs($user)->put(route('users.updatePermission', $user), [
            'permissions' => collect(PermissionEnum::cases())->map(fn(PermissionEnum $q) => $q->value)->toArray()
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('users.index'));
        $response->assertStatus(302);

        $user->refresh();
        assertTrue($user->hasAllPermissions(collect(PermissionEnum::cases())->map(fn(PermissionEnum $q) => $q->value)->toArray()));

    }

    public function test_can_destroy_user(): void
    {
        $user = User::factory()->create();
        $user->givePermissionTo(PermissionEnum::USER_DELETE->value);

        $response = $this->actingAs($user)->delete(route('users.destroy', $user));

        $response->assertStatus(302);
        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
        ]);
    }
}
