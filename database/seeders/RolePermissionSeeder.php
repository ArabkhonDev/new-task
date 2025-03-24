<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Ruxsatlarni yaratish
        $permissions = [
            'create posts',
            'edit posts',
            'delete posts',
            'view users',
            'edit users',
            'manage users'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Rollarni yaratish
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $writer = Role::firstOrCreate(['name' => 'writer']);

        // Rollarga ruxsatlarni berish
        $admin->givePermissionTo($permissions);
        $writer->givePermissionTo(['create posts', 'edit posts', 'delete posts']);
    }
}

