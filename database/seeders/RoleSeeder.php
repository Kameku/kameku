<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
   
    public function run(): void
    {
       $role_admin = Role::create(['name' => 'admin' ]);
       $role_editor = Role::create(['name' => 'editor' ]);

       $permission_create_role = Permission::create(['name' => 'create roles']);
       $permission_read_role = Permission::create(['name' => 'read roles']);
       $permission_update_role = Permission::create(['name' => 'update roles']);
       $permission_delete_role = Permission::create(['name' => 'delete roles']);

        $permission_admin = [
            
            $permission_create_role,
            $permission_read_role,
            $permission_update_role,
            $permission_delete_role, 
        
        ];

        $permission_editor = [
            
            $permission_read_role,
        
        ];

        $role_admin->syncPermissions($permission_admin);
        $role_editor->syncPermissions($permission_editor);

    }
}
