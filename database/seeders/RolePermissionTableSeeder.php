<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_user = 'System';

        $create_role_super_admin = 'Super Admin';
        $create_role_member_admin = 'Admin';

        /** Reset Cached Roles and Permissions */
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        /** Create Permission */
        $permissions_admin = setAdminAdminPermission();
        foreach ($permissions_admin as $permission) {
            Permission::create($permission);
        }

        $permissions_member = setAdminMemberPermission();
        foreach ($permissions_member as $permission) {
            Permission::create($permission);
        }

        /** Create Role */
        $role_super_admin = Role::create([
            'guard_name' => getGuardNameAdmin(),
            'name' => $create_role_super_admin,
        ]);

        $role_member_admin = Role::create([
            'guard_name' => getGuardNameMember(),
            'name' => $create_role_member_admin,
        ]);

        /** Create User */
        $user_super_admin = Admin::create([
            'name' => 'Super Admin',
            'slug' => Str::slug('Super Admin'),
            'email' => 'kuswandi.ti@gmail.com',
            'username' => Str::slug('Super Admin'),
            'email_verified_at' => saveDateTimeNow(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'approved' => 1,
            'approved_at' => saveDateTimeNow(),
            'approved_by' => $default_user,
            'remember_token' => Str::random(10),
            'created_by' => $default_user,
        ]);

        /** Assign Role */
        $user_super_admin->assignRole($role_super_admin);

        /** Assign Permission to Role */
        $role_member_admin->givePermissionTo(arrayAdminMemberPermission());
    }
}
