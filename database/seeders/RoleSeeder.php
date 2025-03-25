<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'create posts',
            'edit posts',
            'delete posts',
            'manage users'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $adminRole = Role::create(['name' => 'admin']);
        $writerRole = Role::create(['name' => 'writer']);

        $adminRole->givePermissionTo($permissions);
        $writerRole->givePermissionTo(['create posts', 'edit posts']);

        $admin = User::find(1);
        $admin->assignRole($adminRole);

        $writer = User::find(2);
        $writer->assignRole($writerRole);

        $writer2 = User::find(3);
        $writer2->assignRole($writerRole);
    }
}
