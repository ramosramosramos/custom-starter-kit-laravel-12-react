<?php

namespace Database\Seeders;

use App\Enum\PermissionEnum;
use App\Enum\RoleEnum;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->createUsers();
    }

    public function createUsers()
    {
        $user = User::firstOrCreate(
            [
                'email' => "kentjeroneramos@gmail.com",
            ],
            [
                'name' => "Kent Jerone Ramos",
                'email' => "kentjeroneramos@gmail.com",
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ]
        );


        $admin_user = User::firstOrCreate(
            [
                'email' => "adminuser@gmail.com",
            ],
            [
                'name' => "Admin User",
                'email' => "adminuser@gmail.com",
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ]
        );
        /**
         * @var User $super_admin_user
         */
        $super_admin_user = User::firstOrCreate(
            [
                'email' => "superadminuser@gmail.com",
            ],
            [
                'name' => "Admin User",
                'email' => "superadminuser@gmail.com",
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ]
        );

        foreach (RoleEnum::cases() as $role) {
            Role::firstOrCreate([
                'name' => $role->value,
            ]);
        }
        foreach (PermissionEnum::cases() as $permission) {
            Permission::firstOrCreate([
                'name' => $permission->value,
            ]);
        }
        $super_admin_user->assignRole(RoleEnum::SUPER_ADMIN->value);
        $admin_user->assignRole(RoleEnum::ADMIN->value);


        $super_admin_user->syncPermissions(PermissionEnum::cases());
        //admin dont have permissions that has delete
        $admin_user->syncPermissions(
            array_filter(
                PermissionEnum::cases(),
                fn(PermissionEnum $permission) => !str_contains($permission->value, 'delete')
            )
        );




    }
}
