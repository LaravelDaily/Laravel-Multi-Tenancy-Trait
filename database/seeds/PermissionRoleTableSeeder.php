<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = Permission::pluck('id');
        Role::findOrFail(1)->permissions()->sync($permissions);
    }
}
