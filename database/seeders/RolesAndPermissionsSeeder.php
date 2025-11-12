<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'manage leads',
            'manage students',
            'manage universities',
            'manage programs',
            'manage appointments',
            'manage courses',
            'manage users',
            'manage settings',
            'view reports',
            'view own data',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->givePermissionTo(Permission::all());

        $staff = Role::firstOrCreate(['name' => 'staff']);
        $staff->givePermissionTo([
            'manage leads',
            'manage students',
            'manage universities',
            'manage programs',
            'manage appointments',
            'view reports',
        ]);

        $consultant = Role::firstOrCreate(['name' => 'consultant']);
        $consultant->givePermissionTo([
            'manage leads',
            'manage students',
            'manage appointments',
            'view own data',
        ]);

        $student = Role::firstOrCreate(['name' => 'student']);
        $student->givePermissionTo([
            'view own data',
        ]);

        $adminUser = User::where('email', 'admin@example.com')->first();
        if ($adminUser) {
            $adminUser->assignRole('admin');
        }
    }
}
